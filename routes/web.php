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
Route::get('/nice_effect', 'BlogController@show_effect')->name('nice_effect');
Route::get('/link', 'BlogController@storage')->name('link');
Route::post('/link', 'BlogController@create_link')->name('create_link');
Route::get('{id}/post', 'PostController@show')->name('show_post');


Route::middleware(['auth'])->group(function () {

    Route::get('{id}/post/delete', 'PostController@destroy')->name('post.delete');
    Route::get('/analysis', 'AnalysisController@index')->name('analysis');
    Route::post('/post', 'PostController@createPost')->name('create_post');
    Route::get('{id}/link', 'BlogController@delete_link')->name('delete_link');
    Route::get('{id}/edit', 'BlogController@edit_link')->name('edit_link');
    Route::post('{link}/update', 'BlogController@update_link')->name('update_link');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Vuejs
Route::get('manage-vue', 'VueItemController@manageVue');
Route::resource('vueitems','VueItemController');

//Test Email

Route::get('send-mail', 'BlogController@sendMail')->name('send_mail');;

