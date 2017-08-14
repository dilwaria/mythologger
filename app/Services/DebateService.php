<?php
namespace App\Services;

use App\Debate;
use App\Tags;
use App\Users;
use App\Facts;
use App\Answers;
use DB;
use App\Services\UserService;
use App;

class DebateService{
	private $userService;

	public function __construct(){
		
		$this->userService= App::make('userService');
	}

	public function getDebate($debateID){
		if(!$debateID){
			return NULL;
		}
		$debate= Debate::where('id','=',$debateID)->first();
		if(!$debate){
			return NULL;
		}

		// $tagArr=[];
		// foreach ($blog->tags as $t){
		// 	$tagArr[]=$t->tagName;
		// }
		// $blog->tagList= implode(",",$tagArr);

		return $debate;
	}

	public function saveDebate($debate,$debateID){
		$d= $this->handleDebateUpdate($debate,$debateID);
		// $d->tags()->detach();
  //       foreach ($tags as $tempTags) {
  //       	$t= $this->handleTags($tempTags);
  //       	$b->tags()->save($t);
  //       }
	}

	private function handleDebateUpdate($debate,$debateID){
		if($debateID){
			$d= $this->getDebate($debateID);
			$d->createFromArray($debate);
			// unset($b->tagList);
	        $d->save();
		}else{
			$d= new Debate();
	        $d= $d->createFromArray($debate);
	        $res=$d->save();
    	}
    	return $d;
	}


	public function getAllDebate($limit){
		$debate= Debate::where('active','=',1)->limit($limit)->get();
		foreach($debate as $d){
			$this->preprocessPopularDebates($d);
		}
		return $debate;
	}


    private function preprocessPopularDebates(&$debate,$contentLimit=250){
		//strip off html from title and content
		$resultDebateContent= strip_tags($debate->debateDesc);
		$resultDebateContent = substr($resultDebateContent,0,$contentLimit);
		$resultDebateContent.="...";
	 	$debate->debateDesc= $resultDebateContent;
		$debate->title= strip_tags($debate->debateTitle);
		// var_dump($blog->tags[0]->tagName);die;
		// add the tags after implode
		// $tagArr=[];
		// foreach ($blog->tags as $t){
		// 	$tagArr[]=$t->tagName;
		// }
		// $blog->tagList= implode(",",$tagArr);
		// $createdByUser= $blog->users;
		// $blog->createdBy= $createdByUser->FirstName." ".$createdByUser->LastName;
	}


	public function incrementViewCount($debate){
		$debateView= intval($debate->views);
		if(isset($debate->tagList)){
			unset($debate->tagList);
		}
		$debate->views= $debateView+1;
		$debate->save();
	}

}