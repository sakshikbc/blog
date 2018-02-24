<?php
// Route::get('/', 'HomeController@index');


Route::get('/', function () {
    return view('pages.index');
});
Route::get('/features', function () {
    return view('pages.features');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/global-marketplaces', function () {
    return view('pages.global-marketplaces');
});
Route::get('/indian-marketplaces', function () {
    return view('pages.indian-marketplaces');
});


Route::get('/blog', 'PostsController@index')->name('allposts');
Route::get('/posts/create', 'PostsController@create')->name('newBlog');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/update', 'PostsController@update');
Route::get('/posts/{post}', 'PostsController@show')->name('post');
Route::get('/posts', 'PostsController@showAll')->name('showAll');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/posts/delete/{post}', 'PostsController@destroy')->name('post-delete');
Route::get('/posts/edit/{post}', 'PostsController@edit')->name('post-edit');
Route::post('/posts/update/{post}', 'PostsController@update')->name('post-update');
Route::resource('/upload', 'EditorController');
Route::get('/get-blog-image', function() {
	return view('get-image');
});
Route::post('/post-blog-image', 'EditorController@imageStore');
Route::get('/get-blog-images', 'EditorController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');

