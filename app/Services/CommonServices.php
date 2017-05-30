<?php

namespace App\Services;

class CommonServices{

	public function processCategoryName($categoryName){
		$categoryName= strtolower($categoryName);
		$categoryName = preg_replace('/\s+/', '-', $categoryName);
		return $categoryName;
	}
	
}

?>
