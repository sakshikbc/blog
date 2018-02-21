<?php
// Route::get('/', 'HomeController@index');

Route::get('/', 'PostsController@index')->name('allposts');
Route::get('/posts/create', 'PostsController@create')->name('newBlog');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show')->name('post');
Route::get('/posts', 'PostsController@showAll')->name('showAll');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index');

