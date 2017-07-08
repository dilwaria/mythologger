<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\DebateService;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use DB;


class DebateController extends Controller{

	private $debateService;
    private $userService;

    public function __construct(DebateService $d, UserService $u){
    	var_dump($d);
        $this->debateService= $d;
        $this->userService = $u;
    }


	public function showDebatePage(){
		return view('debate/debate');
	}


    // /debate/admin/mythologger/mYthologgerBlog123@mty
    public function getDebateAdminPanel($userName,$password){
    	echo "string";
        $debateID= Request::input('debateID');
        $debate=$this->debateService->getDebate($debateID);
        if($userName=='mythologger' && $password== 'mYthologgerBlog123@mty'){
            $tagArr=NULL;
            if($debate){
                $tagArr= $debate->tagID;
            }
            return view('debate.debateAdmin',['debate'=>$debate,'tagArr'=>$tagArr]);
        }else{
            abort(404);
            
        }
    }

    public function saveDebate(){
        $debate= Request::input('debate');
        // $tags= Request::input('tags');
        $debateID= Request::input('debateID','');
        // if(empty($tags)){
        //     echo "There must be at least one tag. Not inserted";
        //     return;
        // }
        $this->debateService->saveDebate($debate,$debateID);
        echo "Saved Sucessfully";
   }


}