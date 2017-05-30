<?php

namespace App\Services;

use App;

class CommonServices{

	public function processCategoryName($categoryName){
		$categoryName= strtolower($categoryName);
		$categoryName = preg_replace('/\s+/', '-', $categoryName);
		return $categoryName;
	}

	//in string
	public function processCategoryNameToDisplay($categoryName){
		$res="";
		if(!is_array($categoryName)){
			$categoryName= explode(",", $categoryName);
		}
		foreach ($categoryName as $cat) {
			$tempStr= str_replace("-", " ", $cat);
			$res.= ucwords($tempStr);
			$res.=", ";
		}
		$res=trim($res);
		$res=trim($res,",");
		return $res;
	}
	
}

?>
