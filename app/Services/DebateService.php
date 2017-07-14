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


}