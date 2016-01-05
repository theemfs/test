<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Pages
Route::get('/', 		'PagesController@welcome');
Route::get('/about', 	'PagesController@about');


// Tasks
Route::resource('tasks', 'TasksController');


Route::get('/auth/login', 	'Auth\AuthController');


// Route::group(['middleware' => 'web'], function () {
//     //Route::auth();
//     Route::get('/home', 'PagesController@home');
// });

// //Route::resource('auth', 'Auth\AuthController');
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	//'password' => 'Auth\PasswordController',
// ]);



// Route::get('/', function () {
// 	//return redirect('http://ya.ru/');
// });

// Route::get('/tasks/test', ['as' => 't', function(){
// 	return view('welcome');
// }]);

// Route::group(['prefix' => 'tasks/{task_id}'], function()
// {
//   Route::get('detail', function($task_id)
//   {
//     return $task_id;
//   });
// });

// Route::get('tasks/{task}', function(App\Tasks $task)
// {
// 	return $task;
// });


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::get('/', function () {
// 	//return view('welcome');
// 	Route::get('/', 'HomeController');
// });

// Route::group(['middleware' => 'web'], function () {
// 	Route::auth();
// 	Route::get('/', 'HomeController@welcome');
// });


// Route::get('/home', 'HomeController@index');
// Route::get('/', 'HomeController@welcome');

// Route::get('/', 'PagesController@welcome');

// Route::group(['middleware' => 'web'], function () {
// 	//Route::auth();
// 	Route::get('/', 'PagesController@welcome');
// 	Route::get('/home', 'PagesController@home');
// 	Route::resource('/tasks', 'TasksController');
// 	// Route::controllers([
// 	// 	'auth' => 'Auth\AuthController',
// 	// 	// 'password' => 'Auth\PasswordController',
// 	// ]);
// });

// Route::group(['middleware' => 'web'], function () {
// 	Route::auth();
// 	Route::get('/home', 'HomeController@index');
// });


