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

Route::get('/', 'IndexController@index');
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{slug}', 'ArticlesController@view');
// Route::get('/articles/{slug}', 'ArticlesController@view');
Route::post('/articles/{id}/comment', 'CommentController@savecomments');
Route::get('/articles/{id}/comment', 'CommentController@showComment');


Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){

	Route::get('/', 'ArticlesController@get_articles');
	Route::get('/articles', 'ArticlesController@get_articles');
	Route::get('/articles/new', 'ArticlesController@create_new_article');
	Route::post('/articles/new', 'ArticlesController@save_created_article');
	Route::get('/articles/{id}', 'ArticlesController@get_article');
	Route::get('/articles/{id}/edit', 'ArticlesController@edit_article');
	Route::post('/articles/{id}/update', 'ArticlesController@update_edited_article');
	Route::get('/articles/{id}', 'ArticlesController@delete_article');
});
