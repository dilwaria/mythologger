<?php

namespace App\Services;

use App\Blog;
use App\Tags;
use App\Facts;
use DB;
use App\Services\BlogService;
use App\Services\DebateService;

use App;

class Widgets{

	private $blogService;
	private $debateService;

	public function __construct(){
		$this->blogService= App::make('blogService');
		$this->debateService= App::make('debateService');
	}

	public function getPopularPosts($limit=4){
		return $this->blogService->getPopularBlogs($limit);
	}

	public function getCategories(){
		$blogs= Tags::withCount('blogs')->limit(4)->get()->
			sortBy( function($tags) {
				return $tags->blogs->count();
			},SORT_REGULAR,true);
			$blogs= $blogs->toArray();
			return $blogs;
	}

	public function getFacts(){
		 $facts  = $this->blogService->getFactsService();
		 $facts= $facts->toArray();
		 // foreach($facts as $id=>$f){
		 // 	$len= strlen($f['factDesc']);
	 	// 	$facts[$id]['factDesc']="<span>".$facts[$id]['factDesc']."</h5>";
		 // }
		 return $facts;
		
	}

	public function getAllDebates($limit=3){
		return $this->debateService->getAllDebate($limit);
	}

	public function getHomePageImgUrls($imgUrl){
		$imgArr= explode('.', $imgUrl);
		return $imgArr[0]."_250.".$imgArr[1];
	}

	public function getPopularImgUrls($imgUrl){
		$imgArr= explode('.', $imgUrl);
		return $imgArr[0]."_60.".$imgArr[1];
	}


}

?>