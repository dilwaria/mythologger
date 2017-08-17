<?php

namespace App\Services;

use App\Users;
use App\Todolist;
use DB;

class DockableService{

	public function __construct(){
		
	}


	public function addToDoList($text){
		$todolist = new Todolist;
		if(!$text){
			return "Opps ! give the task name";
		}
		$phelesehai = Todolist::where('text','=',$text)->where('active','=',0)->first();
		if($phelesehai){
			return "Change the task Name!! opps!! Already Present";
			
		}

        $todolist->text   = $text;     
        $todolist->save();
        return "ADDed to list --> " . $text . " ";

	}


	public function getToDoList(){
		$todolists = Todolist::where('active','=',0)->get();

		return $todolists;
	}

	public function markToDoList($text){
		$todolists = Todolist::where('text','=',$text)->first();
		if(!$todolists){
			return "No such task is there";
		}
		$todolists->active =1 ;
		$todolists->save();
		return "deleted the list";
		
	}


}
