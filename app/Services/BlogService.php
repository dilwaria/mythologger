<?php

namespace App\Services;

use App\Blog;
use App\Tags;
use DB;

class BlogService{
	
	public function saveBlog($blog,$tags,$blogID){
		$b= $this->handleBlogUpdate($blog,$blogID);
		$b->tags()->detach();
        foreach ($tags as $tempTags) {
        	$t= $this->handleTags($tempTags);
        	$b->tags()->save($t);
        }
	}

	public function getBlogsByCategory($category,$offset=0,$limit=5){
		$blogs= Blog::where('showOnWeb','=',1)->
		//use comma sepaated for multiple in use clause
				whereHas('tags',function($query) use ($category){
					$query->where('tagName','=',$category);
				})
					->orderBy('views')->orderBy('createDateTime','desc')->offset($offset)->limit($limit)->get();
		foreach($blogs as $b){
			$this->preprocessPopularPosts($b);
		}
		
		return $blogs->toArray();
	}

	public function getHomePageBlogs($limit){
		$offset=0;
		$blogs= Blog::where('showOnWeb','=',1)
					->orderBy('views')->orderBy('createDateTime','desc')->offset($offset)->limit($limit)->get();
		foreach($blogs as $b){
			$this->preprocessPopularPosts($b,250);
		}
		$tempBlogs= $blogs->toArray();
		return array_chunk($tempBlogs, 3);
	}

	public function getPopularBlogs($limit=6){
		$blogs= Blog::where('showOnWeb','=',1)
					->orderBy('views')->orderBy('createDateTime','desc')->limit($limit)->get();
		foreach($blogs as $b){
			$this->preprocessPopularPosts($b);
		}
		return $blogs->toArray();
	}

	private function preprocessPopularPosts(&$blog,$contentLimit=130){
		//strip off html from title and content
		$resultBlogContent= strip_tags($blog->blogContent);
		$resultBlogContent = substr($resultBlogContent,0,$contentLimit);
		$resultBlogContent.="...";
	 	$blog->blogContent= $resultBlogContent;
		$blog->title= strip_tags($blog->title);
		// var_dump($blog->tags[0]->tagName);die;
		// add the tags after implode
		$tagArr=[];
		foreach ($blog->tags as $t){
			$tagArr[]=$t->tagName;
		}
		$blog->tagList= implode(",",$tagArr);
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