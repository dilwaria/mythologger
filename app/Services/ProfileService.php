<?php

namespace App\Services;

use App\Users;
use App\ProfileFollowers;
use DB;


class ProfileService{

	public function createProfile(){

	}

	public function followProfile($profileData){
		$followers = new ProfileFollowers();
		$followers= $followers->createFromArray($profileData);
		$result = $followers->save();
	}


}
