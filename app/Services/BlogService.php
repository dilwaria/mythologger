<?php

namespace App\Services;

use App\Blog;
use App\Tags;

class BlogService{
	
	public function saveBlog($blog,$tags){
		$b= new Blog();
        $b= $b->createFromArray($blog);
        $res=$b->save();
        foreach ($tags as $tempTags) {
        	$t= new Tags();
	        $t= $t->createFromArray($tempTags);
	        $b->tags()->save($t);
        }
	}

	public function getBlog($blogID){
			$blog= Blog::where('id','=',$blogID)->get();
			return $blog[0];
	}

	public function searchTags($val){
		return Tags::where('tagName', 'LIKE', "%$val%")->get();
	}
}

?>
