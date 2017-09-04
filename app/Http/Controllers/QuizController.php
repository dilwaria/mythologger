<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\UserService;
use App\Services\QuizService;
use App\Http\Controllers\Controller;
use DB;
use App;
use App\User;
use Session;
use Auth;
use App\Events\eventTrigger;


class QuizController extends Controller{

	private $quizService;
    private $userService;
    private $answerService;
    private $request;

    public function __construct(QuizService $qs, UserService $u, Request $rr){
        $this->request = $rr;
        $this->quizService= $qs;
        $this->userService = $u;
        }
        

    public function handleAdmin(){

    	$password= Request::input('password');
    	$quizID= Request::input('quizID');

        $quiz=$this->quizService->getQuiz($quizID);
        if($password== 'mYTHOLOGGER123@'){
            $tagArr=NULL;
            if($quiz){

                $tagArr= $quiz->tags;
            }
            
            return view('quiz.quizAdmin',['quiz'=>$quiz,'tagArr'=>$tagArr]);
        }else{
            abort(404);
            
        }

    	echo "a";
    }


    public function saveQuiz(){
        $quiz= Request::input('quiz');
        $tags= Request::input('tags');
        $quizID= Request::input('quizID','');
        if(empty($tags)){
            echo "There must be at least one tag. Not inserted";
            return;
        }
        $this->quizService->saveQuiz($quiz,$tags,$quizID);
        echo "Saved Sucessfully";
   }

   public function quizPush(){
        event(new eventTrigger());
   }

}