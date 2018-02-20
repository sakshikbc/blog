<!doctype html>
<html lang="en">
  <head>
<title>@yield('title')</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" /></head>
<link href="/css/blog.css" rel="stylesheet">
@yield('metas')
  </head>

  <body>

    <header>
    	@include('layouts.nav')
         <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">My blogs</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>
    </header>
<div class="container">
	@yield('content')
</div>
	@include('layouts.footer')
     </body>
</html>
