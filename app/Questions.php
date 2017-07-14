<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';

    protected $table = 'blogs';

    function tags(){
    	return $this->belongsToMany('App\Tags','tagMapping','blogID','tagID');
    }

    function users(){
        return $this->belongsTo('App\Users','creatorID','userID');
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
