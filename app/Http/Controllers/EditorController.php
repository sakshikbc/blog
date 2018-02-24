<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;
class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paths = Storage::disk('s3')->files('blog/');
        foreach($paths as $path) {
            $out[] = [
                'url' => config('app.static_url') . '/' . $path
            ];
    }
    return $out;
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function imageStore( Request $request) {
        $staticPath = config('app.static_url');
        if(!$request->hasFile('file')) {
            return response('No file selected', 403);
        }

        $file = $request->file('file');
        $filename = 'blog/' . time() . '-' . str_random(15) . '.' . $file->getClientOriginalExtension();
        Storage::disk('s3')->put($filename, file_get_contents($file));
        return [
            'link' => config('app.static_url') . '/' .$filename
        ];
    }

    protected function storeImagePath($filename)
    {
        $media = new Image($filename);
        // $media->entity = 'products';
        $image->posts()->save($media);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exists = Storage::disk('s3')->exists('file.jpg');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
