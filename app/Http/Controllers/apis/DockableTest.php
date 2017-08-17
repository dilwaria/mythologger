<?php

namespace App\Http\Controllers\apis;

use  Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Services\DockableService;
use DB;


// 226451310967.224827743969 client id
// 77beddce172677dbc206ab17573eb362  client secret key
// igePHdSLSB9So4QwVAg3qaQI verifytoken
class DockableTest extends Controller
{
	private $dService ;
	public function __construct(DockableService $ds){

		$this->dService = $ds;        
    }

    public function todolist(){

    	$what = Request::input('token');
    	$token = "igePHdSLSB9So4QwVAg3qaQI";
    	if($what==$token){
    		$command = Request::input('command');

    		if($command=="/todolist"){
    			$message = $this->alltodolist();
    		}
    		else if($command=="/addtodolist"){
    			$text = Request::input('text');
    			$message = $this->addtodolist($text);
    		}
    		else if($command=="/marktodolist"){
    			$text = Request::input('text');
    			$message = $this->marktodolist($text);

    		}
    		else {return "bad command";}
    	 // $this->dService->markToDoList("ramu");
    	return $message;
    }
    else{ return "invalid token";}
}

	private function alltodolist(){
		$getToDoList  = $this->dService->getToDoList();
		if($getToDoList==[]){
			return "Empty List , No TODO's";
		}
		return $getToDoList;
	}

	private function addtodolist($text){
		$addToDoList  = $this->dService->addToDoList($text);
		return $addToDoList;
	}

	private function marktodolist($text){
		$markToDoList  = $this->dService->markToDoList($text);
		return $markToDoList;
	}

}