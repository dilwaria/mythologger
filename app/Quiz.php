<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';

    protected $table = 'quizData';

    function tags(){
    	return $this->belongsToMany('App\Tags','tagMappingQuiz','quizID','tagID');
    }

    // function users(){
    //     return $this->belongsTo('App\Users','creatorID','userID');
    // }

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
    		if($value){
    			$this->$key=$value;
    		}
    	}
    	return $this;
    }

}
