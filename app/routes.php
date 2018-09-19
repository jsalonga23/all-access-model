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


Route::get('/', array('uses' => 'PageController@index'));
Route::get('/register', array('uses' => 'PageController@register'));



Route::group(array('before' => 'csrf'), function() {
	Route::post('/register/submit', array('uses' => 'RegisterController@insert'));

});



Route::group(array('before' => 'authadmin'), function() {


});
