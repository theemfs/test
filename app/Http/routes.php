<?php

//guests can view this page
// Route::get('/', function () {
//     return view('pages.welcome');
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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 	'PagesController@welcome');
    Route::get('/home', 'PagesController@home');
    Route::get('/about','PagesController@about');

    Route::resource('/tasks', 'TasksController');
});

sdfsdfs