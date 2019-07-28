<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('post.index')->middleware('auth');
Route::get('/posts/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::post('/posts', 'PostController@store')->name('post.store')->middleware('auth');
