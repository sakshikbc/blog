<?php
// Route::get('/', 'HomeController@index');

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show')->name('post');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

