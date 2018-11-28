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
    return view('showLogin');
});

Route::get('/login', 'LoginController@showLogin')->name('show.login');

Route::post('/login', 'LoginController@login')->name('user.login');

//Route::get('/posts', 'PostController@showBlog')->name('show.blog');

Route::get('/logout', 'LogOutController@logout')->name('user.logout');

Route::group(['prefix' => 'posts'], function () {

    Route::get('/index', 'PostController@index')->name('posts.index');

    Route::get('/create', 'PostController@create')->name('posts.create');

    Route::post('/create', 'PostController@store')->name('posts.store');

    Route::get('/{id}/view', 'PostController@view')->name('posts.view');

    Route::get('/{id}/edit', 'PostController@edit')->name('posts.edit');

    Route::post('/{id}/edit', 'PostController@update')->name('posts.update');

    Route::get('/{id}/delete', 'PostController@destroy')->name('posts.destroy');

    Route::get('/search', 'PostController@search')->name('posts.search');
});

