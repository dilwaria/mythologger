<?php

namespace App\Services;

use App\Blog;
use App\Tags;
use DB;

class Widgets{

	public function getPopularPosts(){
		$blogs= DB::table('blogs')->where('showOnWeb','=',1)
					->orderBy('views')->orderBy('createDateTime')->limit(3)->get();
		return $blogs->toArray();
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