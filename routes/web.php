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

Route::get('/','Blogcontroller@index')->name('index');
Route::get('/post','Blogcontroller@show_post')->name('show_post');
Route::get('/aboutme','Blogcontroller@show_info')->name('about_me');


Route::get('/contact', function () {
    return view('contact');
});


