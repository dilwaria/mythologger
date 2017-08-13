<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


// 226451310967.224827743969 client id
// 77beddce172677dbc206ab17573eb362  client secret key
// igePHdSLSB9So4QwVAg3qaQI verifytoken
class DockableTest extends Controller
{
	public function __construct(){
        
    }

    public function todolist(){
    	$what = Request::input('token');
    	$token = "igePHdSLSB9So4QwVAg3qaQI";
    	if($what==$token){

    	return "{\"text\": \"This is a line of text.And this is another one.\"}";
    }
}

}