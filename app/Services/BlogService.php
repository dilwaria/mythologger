<?php

namespace App\Services;

use App\Blog;
use App\Tags;

class BlogService{
	
	public function saveBlog($blog,$tags,$blogID){
		$b= $this->handleBlogUpdate($blog,$blogID);
		$b->tags()->detach();
        foreach ($tags as $tempTags) {
        	$t= $this->handleTags($tempTags);
        	$b->tags()->save($t);
        }
	}

	public function getBlog($blogID){
			$blog= Blog::where('id','=',$blogID)->first();
			return $blog;
	}

	public function searchTags($val){
		return Tags::where('tagName', 'LIKE', "%$val%")->get();
	}

	private function handleTags($tempTags){
		if($t=Tags::where('tagName','=',$tempTags['tagName'])->first()){
			return $t;
		}
    	$t= new Tags();
        $t= $t->createFromArray($tempTags);
        return $t;
	}

	private function handleBlogUpdate($blog,$blogID){
		if($blogID){
			$b= $this->getBlog($blogID);
			$b->createFromArray($blog);
	        $b->save();
		}else{
			$b= new Blog();
	        $b= $b->createFromArray($blog);
	        $res=$b->save();
    	}
    	return $b;
	}
}