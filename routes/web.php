<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['uses'=>'BlogController@getHomePage','as'=>'homePage']);

Route::get('/contact-us',['uses'=>'BlogController@getContactUs','as'=>'contactus']);

Route::get('/about-us',['uses'=>'BlogController@getAboutUs','as'=>'aboutus']);

Route::get('/blog/{slug}/{blogID}',['uses'=>'BlogController@getBlogDescription','as'=>'blogDescription']);
Route::get('/blog/admin/{userName}/{password}',['uses'=>'BlogController@getAdminPanel','as'=>'adminPanel']);

Route::post('/blog/saveBlog',['uses'=>'BlogController@saveBlog']);
