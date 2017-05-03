<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function getContactUs(){

	 return view('blog.contactus',[]);
    }

    public function getHomePage(){
    	
    	return "dhhd";
    }

    public function getAboutUs(){
    	return "dhhd";
    }


    public function getBlogDescription(){
    	
    }

}
