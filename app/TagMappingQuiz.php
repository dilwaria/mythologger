<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagMapping extends Model
{

    protected $table = 'tagMappingQuiz';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
