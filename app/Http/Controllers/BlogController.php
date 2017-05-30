<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\BlogService;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use DB;

class BlogController extends Controller
{

    private $blogService;
    private $userService;

    public function __construct(BlogService $b, UserService $u){
        $this->blogService= $b;
        $this->userService = $u;
    }

    public function getContactUs(){

	 return view('blog.contactus',[]);
    }

    public function getHomePage(){
        	$blogs= $this->blogService->getHomePageBlogs(9);
    	   return view('blog.homepage',['allDisplayBlogs'=>$blogs]);
    }

    public function getCategories($category){
        $pageNo= Request::input('pageNo',1);
        $pageSize= Request::input('limit',10);
        $pageSize=6;
        $blogRes= $this->blogService->getBlogsByCategory($category,($pageNo-1)*$pageSize,$pageSize);

        $params = [ 'blogs'=>$blogRes['blogs'],'count'=>$blogRes['count'], 'pageNo'=>$pageNo, 'pageCount'=> ceil($blogRes['count']/$pageSize) ];
        return view('blog.categorypage', $params);
    }

    public function getAboutUs(){
    	return view('blog.aboutus',[]);
    }


    public function getBlogDescription($slug,$blogID){
        $blog= $this->blogService->getBlog($blogID);
        if($slug!=$blog->slug){
            return redirect(route('blogDescription',['slug'=>$blog->slug,'blogID'=>$blogID]),301);
        }
    	return view('blog.fulldescription',['blog'=>$blog, 'creator'=> $blog->users, 'tagList'=>$blog->tagList]);
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

   public function sitemap()
   {
    


    $content = View::make('sitemap', ['doctors' => $doctors, 'patients' => $patients]);
    return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
}

}
