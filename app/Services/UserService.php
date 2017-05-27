<?php

namespace App\Services;

use App\Users;
use App\Tags;
use DB;


class UserService{

	public function getCreator($userID){
			$creator= Users::where('userID','=',$userID)->first();
			return $creator;
	}


}
