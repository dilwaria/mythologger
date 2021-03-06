<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;
use App\Services\BlogService;
use App\Services\UserService;
use App\Services\DebateService;
use App\Http\Controllers\Controller;
use DB;
use PHPMailer;
use Exception;

class BlogController extends Controller
{

    private $blogService;
    private $userService;
    private $debateService;

    public function __construct(BlogService $b, UserService $u, DebateService $d){
        $this->blogService= $b;
        $this->userService = $u;
        $this->debateService = $d;
    }

    public function getContactUs(){
        try{//die('665');
        $mail= new PHPMailer();
        $mail->isSMTP(); // tell to use smtp
        $mail->CharSet = "utf-8"; // set charset to utf8
        $mail->SMTPAuth = true;  // use smpt auth
        $mail->SMTPSecure = "tls"; // or ssl
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing. 
        $mail->Username = "contact@mythologger.com";
        $mail->Password = "mYTHOLOGGER123@";
        $mail->setFrom("contact@mythologger.com", "Mythologger");
        $mail->Subject = "Test";
        $mail->MsgHTML("This is a test");
        $mail->addAddress("abhinavsharma2308@gmail.com", "Recipient Name");
        $mail->send(); 
        }catch(Exception $e){
            var_dump($e);
        }
	 return view('blog.contactus');
    }

    public function contactSubmit(){
        $contact = Request::input('contact');
        $this->blogService->saveContactForm($contact);
        return redirect('contact-us')->with('status', '1');;
    }

    public function getHomePage(){
        	$blogs= $this->blogService->getHomePageBlogs(12);
            $debates =  $this->debateService->getAllDebate(3);
    	   return view('blog.homepage',['allDisplayBlogs'=>$blogs, 'debates'=>$debates]);
    }

    public function getCategories($category=''){
        if(!$category){
            abort(404);
        }
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
        if(!$blog){
            abort(404);
        }
        if($slug!=$blog->slug){
            return redirect(route('blogDescription',['slug'=>$blog->slug,'blogID'=>$blogID]),301);
        }
	$tagList= $blog->tagList;
        $this->blogService->incrementViewCount($blog);
	$blog->tagList=$tagList;
    	return view('blog.fulldescription',['blog'=>$blog, 'creator'=> $blog->users, 'tagList'=>$tagList]);
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


    public function saveContactForm(){

    }

}
