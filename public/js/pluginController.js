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


  $(function() {
     $('#editor').froalaEditor()
   });