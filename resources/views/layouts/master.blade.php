<!doctype html>
<html lang="en">
  <head>
<title>Blog</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link href="/css/blog.css" rel="stylesheet">
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
