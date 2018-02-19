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
    <textarea class="form-control" id="summary-ckeditor" name="body"></textarea>
  </div>
  <div class="form-group">
    <input type="file" name="file" accept=".jpg, .png, .jpeg, .pdf, image" multiple>
  </div>

  {{-- <textarea id="body" name="body" class="form-control" required></textarea> --}}
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

  <button type="submit" class="btn btn-primary">Publish</button>
</form>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
  CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script type="text/javascript">
        function ValidateSize(file) {
            for(var i = 0 ; i<=5; i++){
                var FileSize = file.files[i].size / 1024 / 1024;
                if (FileSize > 2) {
                    alert('File size exceeds 2 MB');
                    $(file).val('');
                } else {

                }
            }
        }
        </script>
@endsection

