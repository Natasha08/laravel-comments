<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/', function() {
    return view('index'); // will return app/views/index.php
});

// api routes

Route::group(array('prefix' => 'api'), function() {

    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'CommentController',
        array('only' => array('index', 'store', 'destroy')));

});

// App::missing(function($exception) {
//   return view('index');
// });
