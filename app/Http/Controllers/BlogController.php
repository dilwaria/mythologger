<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\BlogService;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    private $blogService;

    public function __construct(BlogService $b){
        $this->blogService= $b;
    }

    public function getContactUs(){

	 return view('blog.contactus',[]);
    }

    public function getHomePage(){
    	$blogs= $this->blogService->getPopularBlogs();
    	return view('blog.homepage',['popularBlogs'=>$blogs]);
    
    }

    public function getAboutUs(){
    	return view('blog.aboutus',[]);
    }


    public function getBlogDescription($slug,$blogID){
        $blog= $this->blogService->getBlog($blogID);
        if($slug!=$blog->slug){
            return redirect(route('blogDescription',['slug'=>$blog->slug,'blogID'=>$blogID]),301);
        }
    	return view('blog.fulldescription',['blog'=>$blog]);
    }

    // /blog/admin/mythologger/mYthologgerBlog123@mty
    public function getAdminPanel($userName,$password){
        $blogID= Request::input('blogID');
        $blog=$this->blogService->getBlog($blogID);
        if($userName=='mythologger' && $password== 'mYthologgerBlog123@mty'){
            $tagArr=NULL;
            if($blog){
                $tagArr= $blog->tags;
            }
            return view('blog.blogAdmin',['blog'=>$blog,'tagArr'=>$tagArr]);
        }else{
            abort(404);
            
        }
    }

    public function saveBlog(){
        $blog= Request::input('blog');
        $tags= Request::input('tags');
        $blogID= Request::input('blogID','');
        if(empty($tags)){
            echo "There must be at least one tag. Not inserted";
            return;
        }
        $this->blogService->saveBlog($blog,$tags,$blogID);
        echo "Saved Sucessfully";
   }

   public function getTagListFromQuery(){
        $val= Request::input('tag');
        return $this->blogService->searchTags($val);
   }

}
