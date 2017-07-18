<?php

namespace App\Services;

use App;

class CommonServices{

	private $commonBreadCrumbTags=[
		'hindu-mythology',
		'greek-mythology',
		'chinese-mythology'
	];

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

	public function processCategoryNameForBreadCrumb($categoryName){
		$res="";
		if(!is_array($categoryName)){
			$categoryName= explode(",", $categoryName);
		}
		$catName= '';
		foreach ($this->commonBreadCrumbTags as $key => $tag) {
			if(in_array($tag, $categoryName)){
				$catName= $tag;
				break;
			}else{
				$catName= $categoryName[0];
			}
		}
		$tempStr= str_replace("-", " ", $catName);
		return ucwords($tempStr);;
	}

	public function processCategoryUrlForBreadCrumb($categoryName){
		$res="";
		if(!is_array($categoryName)){
			$categoryName= explode(",", $categoryName);
		}
		$catName= '';
		foreach ($this->commonBreadCrumbTags as $key => $tag) {
			if(in_array($tag, $categoryName)){
				$catName= $tag;
				break;
			}else{
				$catName= $categoryName[0];
			}
		}
		return $catName;
	}

	public function getUserPic($userObj){
		return "/images/user-avatar.jpg";
	}
	
}

?>
