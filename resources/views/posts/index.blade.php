@extends('layouts.master ')
@section('content')
     <div class="col-sm-0 blog-main">
     	@foreach($posts as $post)
     		@include('posts.post')
     	@endforeach
     </div>
@endsection