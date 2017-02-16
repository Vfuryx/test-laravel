<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','SimpleController@home')->name('home');

Route::get('/about','SimpleController@about')->name('about');

Route::get('/help','SimpleController@help')->name('help');


Route::get('signup', 'UserController@create')->name('signup');

resource('users', 'UserController');

get('login','SessionsController@create')->name('login');
post('login','SessionsController@store')->name('login');
delete('logout','SessionsController@destroy')->name('logout');

