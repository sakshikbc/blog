<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;
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

     public function store(Request $request)
    {
        $posting_time = $request->post_date . " " . $request->post_time;
    	$this->validate(request(), [
    		'title' => 'required|min:2',
    		'body' => 'required|min:10',
             'image' => 'mimes:jpeg,bmp,png,gif,svg,pdf|max:2048',

    	]);
    	$post = Post::create([
    		'title' => $request->title,
    		'body' => request('body'),
            'meta_keywords' => request('meta_keywords'),
            'meta_desc' => request('meta_desc'),
            'seo_title' => request('seo_title'),
            'url' => request('url'),
            'author_name' => request('author_name'),
            'posting_time' => $posting_time
    	]);
        // dd($post->id);
        if($request->hasFile('file')){
            // dd('yes');
        foreach ($request->file as $file) {
            $filename = $file->getClientOriginalName();
            $name = pathinfo($filename, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $filename = substr(str_slug($name), 0, 10)  . '-' . time() . '.' . $ext;
            $file->move(public_path('media'), $filename);
            $filepath = 'media' . $filename;
            $media = Image::create([
                'post_id' => $post->id,
                'image' => 'media/'.$filename,
            ]);
            // dd($media);
        }
    }

    	return redirect('/');
    }	
}
