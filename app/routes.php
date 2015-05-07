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
	return View::make('hello');
});

Route::resource('candidates','CandidatesController');
Route::resource('notes','NotesController');
//Route::get('candidates/addcandidate',array('before'=>'auth','uses'=>'CandidatesController@create','as'=>'candidates.create'));
//Route::get('candidates',array('before'=>'auth','uses'=>'CandidatesController@index','as'=>'candidates.index'));
//Route::get('candidates/candidate/{id}',array('before'=>'auth','uses'=>'CandidatesController@show','as'=>'candidates.show'));
//Route::post('/addcandidate',array('before'=>'auth','uses'=>'CandidatesController@store','as'=>'candidates.store'));
//Route::get('candidates/edit/{id}',array('before'=>'auth','uses'=>'CandidatesController@edit','as'=>'candidates.edit'));
//Route::post('/update/{id}',array('before'=>'auth','uses'=>'CandidatesController@update','as'=>'candidates.update'));
//Route::get('candidates/delete/{id}',array('before'=>'auth','uses'=>'CandidatesController@destroy','as'=>'candidates.delete'));

Route::get('candidates/export',array('before'=>'auth','uses'=>'CandidatesController@csvExport','as'=>'csvexport'));
Route::get('allpayments',array('before'=>'auth','uses'=>'PaymentsController@index','as'=>'payments.thedaypayment'));
//Route::get('paymentsfortheday',array('before'=>'auth','uses'=>'PaymentsController@getPaymentsWhere','as'=>'payments.filter'));
Route::get('payments/export',array('before'=>'auth','uses'=>'PaymentsController@csvPaymentExport','as'=>'payments.csvpaymentexport'));




Route::post('candidates/{id}',array('before'=>'auth','uses'=>'PaymentsController@store','as'=>'payments.store'));




Route::get('/login',array('uses'=>'LoginController@index','as'=>'login'));

Route::post('/login','LoginController@loginAuth');

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
