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
Route::group( ['middleware' => ['web'] ], function () {
	Route::get('/',['uses'=>'BlogController@getHomePage','as'=>'homePage']);

	Route::any('/contact-us',['uses'=>'BlogController@getContactUs','as'=>'contactus']);

	Route::get('/blog/{slug}/{blogID}',['uses'=>'BlogController@getBlogDescription','as'=>'blogDescription']);
	Route::get('/blog/admin/{userName}/{password}',['uses'=>'BlogController@getAdminPanel','as'=>'adminPanel']);

	Route::post('/blog/saveBlog',['uses'=>'BlogController@saveBlog']);

	Route::get('/getTags',['uses'=>'BlogController@getTagListFromQuery','as'=>'getTags']);

	Route::get("sitemap.xml", ['uses'=>'BlogController@sitemap','as'=>'sitemap']);

	Route::get('/category/{category?}',['uses'=>'BlogController@getCategories','as'=>'categoryPage']);

	Route::post('/contact-form-submit',['uses'=>'BlogController@contactSubmit','as'=>'contactSubmit']);


	Route::any('/profile/{profileSlug}',['uses'=>'ProfileController@getProfile','as'=>'getProfile']);

	Route::post('/profile/save',['uses'=>'ProfileController@saveProfile','as'=>'saveProfile']);

	Route::get('/debate/{slug}/{debateID}',['uses'=>'DebateController@showDebatePage','as'=>'showDebate']);

	Route::get('/debate/admin/{userName}/{password}',['uses'=>'DebateController@getDebateAdminPanel','as'=>'adminPanelDebate']);

	Route::post('/debate/saveDebate',['uses'=>'DebateController@saveDebate']);

	Route::post('/debate/saveAnswer',['uses'=>'DebateController@saveAnswer','as'=>'submitAnswer']);

	Route::post('/debate/postComment',['uses'=>'DebateController@saveComment','as'=>'postComment']);

	Route::post('/debate/getUserAnswer',['uses'=>'DebateController@getMyAnswer','as'=>'getMyAnswer']);

	Route::get('/followProfile',['uses'=>'ProfileController@followProfile','as'=>'followProfile']);

	Route::get('/privacy',function(){
		return view('privacy');
	})->name('privacy');

	Route::get('/about-us',function(){
		return view('aboutUs');
	})->name('aboutus');
	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/alternate-mythology', 'DebateController@getdebateAllPage')->name('getdebateAllPage');


	Route::get('/quizAdmin', 'QuizController@handleAdmin')->name('handleAdmin');

	Route::post('/quiz/saveQuiz',['uses'=>'QuizController@saveQuiz']);

	Route::any('/quizpush',['uses'=>'QuizController@quizPush']);

	Route::any('/listen',function(){
		return view('listener');
	});




});

// Route::group(['namespace'=>'apis','middleware' => ['api']],function(){
//      Route::any('/dockabletest',['uses'=>'DockableTest@todolist','as'=>'todolist']);
// });
