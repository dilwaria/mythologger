<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\BlogService;
use App\Services\ProfileService;

use App\Http\Controllers\Controller;
use DB;


class ProfileController extends Controller{

	private $profileService;

	public function __construct(ProfileService $ps){
         $this->profileService = $ps;
    }



    public function getProfile($profileSlug){
    	$params  = [];
    	return view('profile.profileDescription',$params);
    }

    public function followProfile(){
    	$profileID = Request::input('profileID');
    	$subscribeStatus = Request::input('subscribeStatus');
    	$followerID = Request::input('followerID');
    	$dataSave['followedProfileID'] = $profileID;
    	$dataSave['subscribeStatus'] = $subscribeStatus;
    	$dataSave['followerID'] = $followerID;
    	// $dataSave = array(); followedProfileID int , followerID int , updateDateTime datetime, subscribeStatus int
    	$this->profileService->followProfile($dataSave);
    	return "saved";
    }

}