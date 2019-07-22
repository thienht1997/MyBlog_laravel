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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/post', function () {
    return view('single-post');
});

Route::get('/aboutme', function () {
    return view('about-me');
})->name('about_me');;

Route::get('/contact', function () {
    return view('contact');
});


