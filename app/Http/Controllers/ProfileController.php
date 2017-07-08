<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\BlogService;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use DB;


class ProfileController extends Controller{

	private $candidate;

	public function __construct(UserService $u){
        $this->userService = $u;
    }


    public function getProfile($profileSlug){
    	$params  = [];
    	return view('profile.profileDescription',$params);
    }

}