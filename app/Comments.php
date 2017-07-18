<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comments extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';

    protected $table = 'comment';


    function answer(){
    	return $this->belongsTo('App\Answers','id','debateAnswerID');
    }

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
    		if($value){
    			$this->$key=$value;
    		}
    	}
    	return $this;
    }

    function writer(){
        return $this->belongsTo('App\User','creatorID','id');
    }   

}
