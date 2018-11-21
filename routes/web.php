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

Route::get('signup', 'PagesController@getSignup');
    // process variable data and params
    // talk to the model
    // receive data from the model
    // compile or process the data from the model if needed
    // pass that data to the correct view


Route::get('login', 'PagesController@getLogin');
    
Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::resource('posts', 'PostController');


    



