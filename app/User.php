<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use App\Answers;
use App\Comments;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function answers(){
        return $this->hasMany('App\Answers','creatorID','id');
    }

    function comments(){
        return $this->hasMany('App\Comments','creatorID','id');
    }
}
