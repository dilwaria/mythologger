<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\DebateService;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use DB;
use App;
use App\User;
// use Cookie;
// use Tracker;
use Session;
use Auth;


class DebateController extends Controller{

	private $debateService;
    private $userService;
    private $answerService;
    private $request;

    public function __construct(DebateService $d, UserService $u, Request $rr){
        $this->request = $rr;
        $this->debateService= $d;
        $this->userService = $u;
        $this->answerService= App::make('answerService');
        
    }


	public function showDebatePage($slug,$debateID){
        $debate= $this->debateService->getDebate($debateID);
        if(!$debate){
            abort(404);
        }
        if($slug!=$debate->slug){
            return redirect(route('showDebate',['slug'=>$debate->slug,'debateID'=>$debateID]),301);
        }

        $this->debateService->incrementViewCount($debate);
        $answers= $this->answerService->getAnswers($debateID);
        // var_dump(count($answers));
        $hasUserAnswered= $this->answerService->checkIfUserAnswered($answers);
        if(!$debate){
            abort(404);
        }
        if(Auth::user()){
                $count_of_answers= $this->answerService->getTotalAnswers(Auth::user()->id);
                $mcoins = $count_of_answers*20 + 10 ; 
            }
        else{ $count_of_answers =-1 ;
                $mcoins =-1 ;}
        $mythoPoints = $debate->views + count($answers)*5 + 20 ;
        $params = ['debate'=>$debate,
                    'answers'=>$answers,
                    'total_answers'=>count($answers),
                    'mytho_points' => $mythoPoints,
                    'count_of_answers'=>$count_of_answers,
                    'mcoins' => $mcoins,
                    'hasUserAnswered'=>$hasUserAnswered];
		return view('debate/debate',$params);
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
        $answerID=NULL;
        if(Request::input('answerID')){
            $answerID= Request::input('answerID');
        }
        $this->answerService->saveAnswer($arr,$answerID);
        $answers=$this->answerService->getAnswers($arr['debateID']);
        $hasUserAnswered= $this->answerService->checkIfUserAnswered($answers);
        $debate= $this->debateService->getDebate($arr['debateID']);
        echo json_encode( ['answers'=>view()->make('debate/answer',['debate'=>$debate,'answers'=>$answers,'hasUserAnswered'=>$hasUserAnswered])->render()] );
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

   public function getMyAnswer(){
        $arr=[];
        $arr['debateID']= Request::input('debateID');
        $res= $this->answerService->getUserAnswer($arr['debateID']);
        echo json_encode($res);
   }


}