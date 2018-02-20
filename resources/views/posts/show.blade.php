@extends('layouts.master')
@section('title')
{{ $post->seo_title }}
@endsection
@section('metas')
<meta property="fb:app_id" content="316855245487403" />
<meta name='keywords' content='{{ $post->meta_keywords }}' />
<meta name="description" content='{{ $post->meta_desc }}'>
<meta property="og:title" content="{{$post->title}}" />
<meta property="og:url" content="{{ route('post', $post['id']) }}" />
{{-- <meta property="og:image" content="{{ asset($media->image) }}" /> --}}

@endsection
@section('content')

<div id="fb-root"></div>
<div class="col-sm-0 blog-main">
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->body }}</p>
	@foreach($media as $img)
		<img src="{{ asset($img->image) }}" style="width:20%; margin-top:10px;" alt="">
	@endforeach

	<p>Author name :{{ $post->author_name }}</p>
	<div id="fb-root"></div>
	<hr>

	<div class="comments">
		<ul class="list-group">
			@foreach($post->comments as $comment)
			<li class="list-group-item">
				<strong>
					{{ $comment->created_at->diffForHumans() }}
				</strong>
				{{ $comment->body }}
			</li>
			@endforeach
		</ul>
		<hr>
		<div class="fb-share-button" data-href="http://dropship.bigly.io/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdropship.bigly.io%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

	</div>
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comments">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		</div>

	</div>
</div>

<script>
function shareOverrideOGMeta(overrideLink, overrideTitle, overrideDescription, overrideImage)
{
	FB.ui({
		method: 'share_open_graph',
		action_type: 'og.shares',
		action_properties: JSON.stringify({
			object: {
				'og:url': overrideLink,
				'og:title': overrideTitle,
				'og:description': overrideDescription,
				'og:image': overrideImage
			}
		})
	},
	function (response) {
	// Action after response
	});
}
</script>
@endsection