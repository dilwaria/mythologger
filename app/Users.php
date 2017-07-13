<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';

    protected $table = 'userAdmin';

    protected $primaryKey="userID";

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
    		if($value){
    			$this->$key=$value;
    		}
    	}
    	return $this;
    }

    function blogs(){
        return $this->hasMany('App\Blog','creatorID','userID');
    }

}
