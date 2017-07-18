<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileFollowers extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';
    
    protected $table = 'profileFollowers';

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
    		if($value){
    			$this->$key=$value;
    		}
    	}
    	return $this;
    }
}
