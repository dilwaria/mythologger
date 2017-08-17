<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
	const CREATED_AT = 'createDateTime';
    const UPDATED_AT = 'updateDateTime';


    protected $table = 'todolist';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    
}
