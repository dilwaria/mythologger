<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';

    protected $table = 'mUsers';

    protected $primaryKey="id";

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
    		if($value){
    			$this->$key=$value;
    		}
    	}
    	return $this;
    }

}
