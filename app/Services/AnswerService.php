<?php

namespace App\Services;

use App\Answers;
use App\Comments;
use DB;
use Auth;

class AnswerService{
	
	public function __construct(){
	}

	public function getAnswer($answerID){
		if(!$answerID){
			return NULL;
		}
		$answer= Answers::where('id','=',$answerID)->first();
		return $answer;
	}

	public function saveAnswer($answer,$answerID){
		$d= $this->handleAnswerUpdate($answer,$answerID);
	}

	private function handleAnswerUpdate($answer,$answerID){
		if($answerID){
			$a= $this->getAnswer($answerID);
			$a->createFromArray($answer);
	        $a->save();
		}else{
			$a= new Answers();
	        $a= $a->createFromArray($answer);
	        $res=$a->save();
    	}
    	return $a;
	}

	public function getAnswers($debateID){
		$answer= Answers::where('debateID','=',$debateID)->orderBy('createDateTime','desc')->get();
		$processedAnswers=[];
		foreach ($answer as $a) {
			$a->pComments= $this->processComments($a);
			$processedAnswers[]=$a;
		}
		return $processedAnswers;
	}

	public function checkIfUserAnswered($answers){
		if(!Auth::user()){
			return false;
		}
		$userID= Auth::user()->id;
		foreach ($answers as $a) {
			$aID= $a->writer->id;
			if($aID== $userID){
				return true;
			}
		}
		return false;
	}

	private function processComments($answer){
		$comments= $answer->comments;
		$resultingComments=[];
		$rootComments=[];
		$childComments=[];
		foreach($comments as $c){
			if($c->parentID){
				$childComments[$c->parentID][]= $c;
			}else{
				$rootComments[]= $c;
			}
		}
		foreach($rootComments as $rc){
			$resultingComments[]= $this->processRootComment($childComments,$rc);
		}
		// var_dump($resultingComments[0]->children[0]);die;
		return $resultingComments;
	}

	public function getCommentsByAnswerID($answerID){
		$answerObj= $this->getAnswer($answerID);
        $answerObj->pComments= $this->processComments($answerObj);
        return $answerObj;
	}

	private function processRootComment($childComments,$rc){
		if(!isset($childComments[$rc->id])){
			$rc->children= NULL;
		}else{
			$newChildArr=[];
			foreach($childComments[$rc->id] as $child){
				$newChild= $this->processRootComment($childComments,$child);
				$newChildArr[]= $newChild;
			}
			$rc->children= $newChildArr;
		}
		return $rc;
	}

	public function saveComment($comment){
		$c= new Comments();
		$c= $c->createFromArray($comment);
        $res=$c->save();
	}

}