<?php

namespace App\Services;

use App\Users;
use App\Quiz;
use App\Tags;
use DB;

class QuizService{

	public function __construct(){
		
	}


	public function getQuiz($quizID){
		if(!$quizID){
			return NULL;
		}
		$quiz= Quiz::where('id','=',$quizID)->first();
		if(!$quiz){
			return NULL;
		}

		$tagArr=[];
		foreach ($quiz->tags as $t){
			$tagArr[]=$t->tagName;
		}
		$quiz->tagList= implode(",",$tagArr);

		return $quiz;
	}

     public function saveQuiz($quiz,$tags,$quizID){
		$q= $this->handleQuizUpdate($quiz,$quizID);
		$q->tags()->detach();
        foreach ($tags as $tempTags) {
        	$t= $this->handleTags($tempTags);
        	$q->tags()->save($t);
        }
	}


	private function handleQuizUpdate($quiz,$quizID){
		if($quizID){
			$q= $this->getQuiz($quizID);
			$q->createFromArray($quiz);
			unset($q->tagList);
	        $q->save();
		}else{
			$q= new Quiz();
	        $q= $q->createFromArray($quiz);
	        $res=$q->save();
    	}
    	return $q;
	}



	private function handleTags($tempTags){
		if($t=Tags::where('tagName','=',$tempTags['tagName'])->first()){
			return $t;
		}
    	$t= new Tags();
        $t= $t->createFromArray($tempTags);
        return $t;
	}

}