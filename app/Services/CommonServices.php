<?php

namespace App\Services;

class CommonServices{

	public function processCategoryName($categoryName){
		$categoryName= strtolower($categoryName);
		// also add the replace of space with -
		return $categoryName;
	}
	
}

?>
