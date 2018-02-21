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
        // dd($post);
        $media = Image::where('post_id', $post->id)->get();
        return view('posts.show', compact('post', 'media'));
    }   

     public function create()
    {
        return view('posts.create');
    }   

     public function store(Request $request)
    {
        $posting_time = $request->post_date . " " . $request->post_time;
        $this->validate(request(), [
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
        
//     function() {
//     $CKEditor = Input::get('CKEditor');
//     $funcNum = Input::get('CKEditorFuncNum');
//     $message = $url = '';
//     if (Input::hasFile('upload')) {
//         $file = Input::file('upload');
//         if ($file->isValid()) {
//             $filename = $file->getClientOriginalName();
//             $file->move(storage_path().'/images/', $filename);
//             $url = public_path() .'/images/' . $filename;
//         } else {
//             $message = 'An error occured while uploading the file.';
//         }
//     } else {
//         $message = 'No file uploaded.';
//     }
//     return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
// };
        // dd($post->id);
        if($request->hasFile('file')){
            // dd('yes');
        // foreach ($request->file as $file) {
            $filename = $request->file->getClientOriginalName();
            $name = pathinfo($filename, PATHINFO_FILENAME);
            $ext = $request->file->getClientOriginalExtension();
            $filename = substr(str_slug($name), 0, 10)  . '-' . time() . '.' . $ext;
            $request->file->move(public_path('media'), $filename);
            $filepath = 'media' . $filename;
            $media = Image::create([
                'post_id' => $post->id,
                'image' => 'media/'.$filename,
            ]);
            // dd($media);
        // }
    }

        return redirect('/');
    }

    public function destroy($id){
        $posts = Post::where('id', $id)->delete();
        return back()->with('success', 'deleted');
    }

    public function showAll()
    {
        $posts = Post::all();
        return view('posts.showAll', compact('posts'));
    }
    public function edit($id){
        $posting = Post::where('id', $id)->get();
        // dd($posts);
        return view('posts.edit', compact('posting'));
    }
    public function update(Request $request, $id)
    {
        dd($request);
    }
}
