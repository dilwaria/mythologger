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
    	
    	return view('blog.homepage',[]);
    
    }

    public function getAboutUs(){
    	return view('blog.aboutus',[]);
    }


    public function getBlogDescription(){
    	return view('blog.fulldescription',[]);
    }

    // /blog/admin/mythologger/mYthologgerBlog123@mty
    public function getAdminPanel($userName,$password){
        if($userName=='mythologger' && $password== 'mYthologgerBlog123@mty'){
            return view('blog.blogAdmin',[]);
        }else{
            abort(404);
            
        }
    }

    public function saveBlog(){
        $blog= Request::input('blog');
        $tags= Request::input('tags');
        $this->blogService->saveBlog($blog,$tags);
   }

}
