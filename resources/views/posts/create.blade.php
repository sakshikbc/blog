@extends('layouts.master')

@section('content')
<h2>Create a blog</h2>
<hr>
<form method="POST" action="/posts" enctype="multipart/form-data">
  {{ csrf_field() }}
  @include('layouts.errors')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>

  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id='blog-editor'></textarea>
  </div>



  <div class="form-group">
    <label for="title">Meta Keywords</label>
    <input type="text" class="form-control" name="meta_keywords" required>
  </div>
  <div class="form-group">
    <label for="title">Meta Description</label>
    <input type="text" class="form-control" name="meta_desc" required>
  </div>
  <div class="form-group">
    <label for="title">Author Name</label>
    <input type="text" class="form-control" name="author_name" required>
  </div>
   <div class="form-group">
    <label for="title">Seo Title</label>
    <input type="text" class="form-control" name="seo_title" required>
  </div>
   <div class="form-group">
    <label for="title">Url</label>
    <input type="text" class="form-control" name="url" required>
  </div>
   <div class="form-group">
                <label>Post Date</label>
                <input type="date" name="post_date" min="2018-02-10">
              </div>
              <div class="form-group">
                <label>Post Time</label>
                <input type="time" name="post_time" min="00:00">
              </div>

  <button type="submit" id="saveButton" class="btn btn-primary">Publish</button>
</form>
@endsection

