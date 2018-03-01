@extends('layouts.master')

@section('content')

<div class="container-fluid tpc blog-body">
  <div class="row">
    <nav class="blog-nav"></nav>
      <div class="col-md-2" style="padding-left: 0;">
        <aside class="sidebar b-left-sidebar">
            
        </aside>
      </div>
    <main>
      <div class="col-md-7">
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
            <textarea class="form-control" rows="8" name="body" id='blog-editor'></textarea>
          </div>
          
           <div class="form-group">
            <label for="body">Image</label>
            <input type="file" class="form-control" name="file" required>
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
          <br>
         <!--   <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label>Post Date</label>
                <input type="date" name="post_date" min="2018-02-10">
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Post Time</label>
                  <input type="time" name="post_time" min="00:00">
                </div>
              </div> -->
              <div class="col-md-4">
                  <button type="submit" id="saveButton" class="btn btn-blue btn-round">Publish</button>
              </div>
            </div>
          </div>
                    

        
        </form>
      </div>
    </main>

    <div class="col-md-3" style="padding-right: 0;">
      <aside class="b-right-sidebar">
        
      </aside>
    </div>
  </div>
</div>
@endsection

