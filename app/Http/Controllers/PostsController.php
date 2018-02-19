<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    //
    public function index()
    {
    	// $posts = Post::orderby('created_at', 'asc')->get();
    	$posts = Post::latest()->get();
    	return view('posts.index', compact('posts') );
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }	

     public function create()
    {
    	return view('posts.create');
    }	

     public function store()
    {
    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');
    	// $post->save();
    	$this->validate(request(), [
    		'title' => 'required|min:2',
    		'body' => 'required|min:10'
    	]);
    	Post::create([
    		'title' => request('title'),
    		'body' => request('body')
    	]);

    	return redirect('/');
    }	
}
