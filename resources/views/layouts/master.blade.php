<!doctype html>
<html lang="en">
  <head>
    <meta name="language" content="English">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>@yield('title')</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/froala_editor.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/code_view.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/emoticons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/image_manager.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/image.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/line_breaker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/table.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/char_counter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/video.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/fullscreen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/file.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/quick_insert.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('icon-bigly/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropship-landing.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile.css') }}">
    
</head>

@yield('metas')


  <body>

    
@yield('content')



@include('layouts.footer')


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{ asset('js/WOW.js') }}"></script>  
<script src="{{ asset('js/lightslider.min.js') }}"></script>  
<script src="{{ asset('js/froala_editor.min.js') }}"></script>  
<script type="text/javascript" src="{{ asset('js/froala_editor.min.js"') }}  ></script>
<script type="text/javascript" src="{{ asset('js/plugins/align.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/char_counter.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/code_beautifier.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/code_view.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/colors.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/draggable.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/emoticons.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/entities.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/file.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/font_size.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/font_family.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/fullscreen.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/image.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/image_manager.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/line_breaker.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/inline_style.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/link.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/lists.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/paragraph_format.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/paragraph_style.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/quick_insert.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/quote.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/table.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/save.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/url.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/plugins/video.min.js') }} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>


<script src="{{ asset('js/pluginController.js') }}"></script>  
    </body>
</html>
