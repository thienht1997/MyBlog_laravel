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
Route::get('/post', 'BlogController@showPost')->name('show-post');
Route::get('/aboutme', 'BlogController@showInfo')->name('about-me');
Route::get('{page}/ajaxposts', 'BlogController@ajaxPostData')->name('ajaxposts');
Route::get('/nice-effect-one', 'BlogController@showEffectOne')->name('nice-effect-one');
Route::get('/nice-effect-two', 'BlogController@showEffectTwo')->name('nice-effect-two');
Route::get('/link', 'BlogController@storage')->name('link');
Route::post('/link', 'BlogController@storageLink')->name('create-link');
Route::get('{id}/post', 'PostController@show')->name('show-post');


Route::middleware(['auth'])->group(function () {
    Route::get('{id}/post/delete', 'PostController@destroy')->name('post.delete');
    Route::get('/analysis', 'AnalysisController@index')->name('analysis');
    Route::post('/post', 'PostController@createPost')->name('create_post');
    Route::get('{id}/link', 'BlogController@destroyLink')->name('delete-link');
    Route::get('{id}/edit', 'BlogController@editLink')->name('edit-link');
    Route::post('{link}/update', 'BlogController@updateLink')->name('update-link');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tiktok-video', 'TiktokVideoController@index')->name('tiktok-index');

//Test Email

Route::get('send-mail', 'BlogController@sendMail')->name('send-mail');;
