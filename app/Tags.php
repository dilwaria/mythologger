<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';
    
    protected $fillable = array('tagName');

    protected $table = 'tagList';

    function blogs(){
    	return $this->belongsToMany('App\Blog','tagMapping','tagID','blogID');
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
