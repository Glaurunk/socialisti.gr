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
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');

Route::resource('articles', 'ArticlesController');
// Actions Handled By Resource Controller
//
// Verb	      URI	                      Action	Route Name
// GET	      /articles	                index	  articles.index
// GET	      /articles/create	        create	articles.create
// POST	      /articles	                store	  articles.store
// GET	      /articles/{article}	      show	  articles.show
// GET	      /articles/{article}/edit	edit	  articles.edit
// PUT/PATCH	/articles/{article}	      update	articles.update
// DELETE	    /articles/{article}	      destroy	articles.destroy

Auth::routes();
