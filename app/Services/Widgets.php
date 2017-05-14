<?php

namespace App\Services;

use App\Blog;
use App\Tags;
use DB;
use App\Services\BlogService;

class Widgets{

	private $blogService;

	public function __construct(){
		$this->blogService= new BlogService();
	}

	public function getPopularPosts(){
		return $this->blogService->getPopularBlogs(3);
	}

	public function getCategories(){
		$blogs= Tags::withCount('blogs')->limit(4)->get()->
			sortBy( function($tags) {
				return $tags->blogs->count();
			},SORT_REGULAR,true);
			$blogs= $blogs->toArray();
			return $blogs;
	}
}

?>