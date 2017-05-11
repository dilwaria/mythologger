<?php

namespace App\Services;

use App\Blog;
use App\Tags;

class BlogService{
	
	public function saveBlog($blog,$tags){
		$b= new Blog();
        $b= $b->createFromArray($blog);
        $res=$b->save();
        $t= new Tags();
        $t= $t->createFromArray($tags);
        $b->tags()->save($t);
	}

	public function getBlog($id){
		return Blog::find($id);
	}
}

?>