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
		$phelesehai = Todolist::where('text','=',$text)->where('active','=',0)->first();
		if($phelesehai){
			return "Change the task Name!! opps!!";
			
		}

        $todolist->text   = $text;     
        $todolist->save();
        return "ADDed to list";

	}


	public function getToDoList(){
		$todolists = Todolist::where('active','=',0)->get();
		return $todolists;
	}

	public function markToDoList($text){
		$todolists = Todolist::where('text','=',$text)->first();
		$todolists->active =1 ;
		$todolists->save();
		return "deleted the list";
		
	}


}
