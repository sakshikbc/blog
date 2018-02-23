<!doctype html>
<html lang="en">
  <head>
<title>@yield('title')</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
 <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
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


  <script>
        wow2 = new WOW(
        {
        boxClass:     'wow-reveal',      // default
        animateClass: 'reveal-text', // default
        offset:       100,          // default
        mobile:       true,       // default
        live:         true        // default
      }
      )
      wow2.init();

        new WOW().init();
        // var scene = document.getElementById('scene');
        // var parallax = new Parallax(scene);
        $('.faq-header').click(function () {
          $(this).closest('.faq-box').toggleClass('active').children('.faq-body').slideToggle();
          
        });
        $('.faq-box.active .faq-body').slideDown();
    
        $("#content-slider").lightSlider({
                loop:true,
                keyPress:true,
                 slideMargin:40
            });

   
  $('.play-video').on('click', function(ev) {
    $(this).parents('.play-video-box').find('.video').show();
     $(this).parents('.play-video-box').find('.video')[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });


      </script>
    </body>
</html>
