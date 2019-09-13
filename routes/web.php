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

Route::get('/', 'BlogController@index')->name('index');
Route::get('/post', 'BlogController@show_post')->name('show_post');
Route::get('/aboutme', 'BlogController@show_info')->name('about_me');
Route::get('{page}/ajaxposts', 'BlogController@ajaxPostData')->name('ajaxposts');
Route::get('/link', 'BlogController@storage')->name('link');
Route::post('/link', 'BlogController@create_link')->name('create_link');
Route::get('/nice_effect', 'BlogController@show_effect')->name('nice_effect');




