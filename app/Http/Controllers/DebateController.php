<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\DebateService;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use DB;
use App;
use App\User;


class DebateController extends Controller{

	private $debateService;
    private $userService;
    private $answerService;

    public function __construct(DebateService $d, UserService $u){
    	
        $this->debateService= $d;
        $this->userService = $u;
        $this->answerService= App::make('answerService');
        // $user= User::find(1);
        // session()->put('mUsers',$user);
    }


	public function showDebatePage($slug,$debateID){
        $debate= $this->debateService->getDebate($debateID);
        $answers= $this->answerService->getAnswers($debateID);
        if(!$debate){
            abort(404);
        }
		return view('debate/debate',['debate'=>$debate,'answers'=>$answers]);
	}


    // /debate/admin/mythologger/mYthologgerBlog123@mty
    public function getDebateAdminPanel($userName,$password){
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

   public function saveAnswer(){
        $arr=[];
        $arr['debateID']= Request::input('debateID');
        $arr['answerContent']= Request::input('answerContent');
        $arr['creatorID']= Request::input('creatorID');
        $this->answerService->saveAnswer($arr,NULL);
        $answers=$this->answerService->getAnswers($arr['debateID']);
        echo json_encode( ['answers'=>view()->make('debate/answer',['answers'=>$answers])->render()] );
   }

    public function saveComment(){
        $arr=[];
        $arr['debateAnswerID']= Request::input('debateAnswerID');
        $arr['commentContent']= Request::input('commentContent');
        $arr['creatorID']= Request::input('creatorID');
        $arr['parentID']= Request::input('parentID');
        $this->answerService->saveComment($arr);
        $comments= $this->answerService->getCommentsByAnswerID($arr['debateAnswerID']);
        echo json_encode(['answerID'=>$arr['debateAnswerID'] ,'comment'=>view()->make('debate/comment',['a'=>$comments])->render() ]);
   }


}