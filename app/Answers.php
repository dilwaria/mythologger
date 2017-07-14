<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';

    protected $table = 'debateAnswer';

    function comments(){
        return $this->hasMany('App\Comments','debateAnswerID','id');
    }

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
    		if($value){
    			$this->$key=$value;
    		}
    	}
    	return $this;
    }

}
