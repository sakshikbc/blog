<!doctype html>
<html lang="en">
  <head>
<title>@yield('title')</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
 <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/plugins/code_view.css">
  <link rel="stylesheet" href="../../css/plugins/colors.css">
  <link rel="stylesheet" href="../../css/plugins/emoticons.css">
  <link rel="stylesheet" href="../../css/plugins/image_manager.css">
  <link rel="stylesheet" href="../../css/plugins/image.css">
  <link rel="stylesheet" href="../../css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../../css/plugins/table.css">
  <link rel="stylesheet" href="../../css/plugins/char_counter.css">
  <link rel="stylesheet" href="../../css/plugins/video.css">
  <link rel="stylesheet" href="../../css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../../css/plugins/file.css">
  <link rel="stylesheet" href="../../css/plugins/quick_insert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  
    <link rel="stylesheet" type="text/css" href="{{ asset('aqil-icon/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropship-landing.css') }}">
    
</head>
<link href="/css/blog.css" rel="stylesheet">
@yield('metas')
  </head>

  <body>

    
@yield('content')



@include('layouts.footer')


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{ asset('js/WOW.js') }}"></script>  
<script src="{{ asset('js/lightslider.min.js') }}"></script>  
<script src="{{ asset('js/froala_editor.min.js') }}"></script>  
<script src="{{ asset('js/pluginController.js') }}"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>


<script type="text/javascript" src="../../js/froala_editor.min.js" ></script>
<script type="text/javascript" src="../../js/plugins/align.min.js"></script>
<script type="text/javascript" src="../../js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="../../js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="../../js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="../../js/plugins/colors.min.js"></script>
<script type="text/javascript" src="../../js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="../../js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="../../js/plugins/entities.min.js"></script>
<script type="text/javascript" src="../../js/plugins/file.min.js"></script>
<script type="text/javascript" src="../../js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="../../js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="../../js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="../../js/plugins/image.min.js"></script>
<script type="text/javascript" src="../../js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="../../js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="../../js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="../../js/plugins/link.min.js"></script>
<script type="text/javascript" src="../../js/plugins/lists.min.js"></script>
<script type="text/javascript" src="../../js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="../../js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="../../js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="../../js/plugins/quote.min.js"></script>
<script type="text/javascript" src="../../js/plugins/table.min.js"></script>
<script type="text/javascript" src="../../js/plugins/save.min.js"></script>
<script type="text/javascript" src="../../js/plugins/url.min.js"></script>
<script type="text/javascript" src="../../js/plugins/video.min.js"></script>



    </body>
</html>
