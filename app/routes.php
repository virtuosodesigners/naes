<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::get('/addcandidate',array('before'=>'auth','uses'=>'AddCandidateController@showForm'));

Route::get('/login', function(){
    return View::make('login');
});

Route::post('/login',function(){
    $credentials=Input::only('username','password');
    if(Auth::attempt($credentials)){
        return Redirect::intended('/');
    }
    return Redirect::to('login');

});

Route::get('/adduser','RegisterController@showRegisterForm');
Route::post('/adduser','RegisterController@processUser');

Route::get('user/{id}/edit',array('uses'=>'UsersController@editUser','as'=>'user.edit'));
Route::post('user/{id}/edit',array('uses'=>'UsersController@updateUserData','as'=>'user.edit'));

Route::get('users',array('as'=>'users','uses'=>'UsersController@getAllUsers'));



// route to process the form
Route::post('nerd/edit', function() {
    // process our form
});

Route::get('/logout',function(){
    Auth::logout();
    return View::make('logout');
});
