<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request;

class DebateController extends Controller{

	public function showDebatePage(){
		return view('debate/debate');
	}

}