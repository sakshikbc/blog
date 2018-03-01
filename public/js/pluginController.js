     

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


  
$('#image-gallery2').lightSlider({
     // gallery:true,
     item:1,
     // thumbItem:9,
     slideMargin: 10,
     speed:500,
     auto:true,
     loop:true,
     onSliderLoad: function() {
         $('#image-gallery2').removeClass('cS-hidden');
     }  
 });


    $('#documents-slider2').lightSlider({
     // gallery:true,
     item:1,
     // thumbItem:9,
     slideMargin: 10,
     speed:1000,
     auto:true,
     loop:true,
     onSliderLoad: function() {
         $('#documents-slider2').removeClass('cS-hidden');
     }  
 }); 


$(function() {
     $('#blog-editor').froalaEditor()
   });
 $(document).ready(function() {
    $("#brandSlider").lightSlider({
        item:5,
    }); 
  });

 
var p1 = new TimelineMax({ repeat: -1});
    p1.to('#user1', 1, {x: -1, y:-1})
    p1.to('#user1', 1, {scale: 0, transformOrigin: 'center center'})
    p1.to('#user2', 2, {x: -10, y:-10})
    p1.to('#user2', 1, {scale: 0, transformOrigin: 'center center'})

    p1.to('#user3', 1, {x: -19, y:-15})
    p1.to('#user3', 1, {scale: 0, transformOrigin: 'center center'})


var hand = new TimelineMax({ repeat: -1,yoyo:true,repeatDelay: .5});
    hand.to(".arm", 1, {rotation: -10 -10, transformOrigin: 'bottom top'})
    hand.to(".hand", 1, {rotation: -30 -30, y:-2, x: 0,  transformOrigin: 'bottom top', repeat: 0},0)


 


    
       var shutter = new TimelineMax({ });
         shutter.to(".shutter ", 5, {y: -200})
       
         shutter.fromTo(".hand-moving", 5, {rotation: 90, transformOrigin: 'bottom left'}, {rotation: -30, transformOrigin: 'bottom left'},0)
            shutter.pause()

// if visible 
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
    if ($('#footer').isInViewport()) {
      shutter.play()
    } else {
    shutter.restart();
        
    }
});

$('.navbar-toggle').click(function(argument) {
    $('.navbar-collapse').slideToggle();
})

// watch ================================

    var canvas = document.getElementById('s3-watch');
var ctx = canvas.getContext('2d');
clock();

function clock() {
    var date = new Date();
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    
    ctx.clearRect(0, 0, 300, 300);
    ctx.save();
    ctx.translate(150, 150);
    ctx.strokeStyle = '#ddd'; // numbers
    var pitch = Math.PI * 2 / 12;
    for (var i = 0; i < 12; i++) {
        ctx.beginPath();
        ctx.lineWidth = 0;
        ctx.moveTo(0, -135);
        ctx.lineTo(0, -140);
        ctx.stroke();
        ctx.rotate(pitch);
    }
    ctx.restore();
    
    var hourHand = (Math.PI * 2) / 12 * hour + (Math.PI * 2) / 12 * (min / 60);
    var minHand = (Math.PI * 2) / 60 * min;
    var secHand = (Math.PI * 2) / 60 * sec;
    
    clockHand(hourHand, 80, 15, '#333'); // for hour stroke
    clockHand(minHand, 120, 10, '#333'); // for minute stroke
    clockHand(secHand, 130, 6, '#e00'); // for second stroke
    
    setTimeout(clock, 1000);
}

function clockHand(rotation, length, width, color) {
    ctx.save();
    ctx.lineWidth = width;
    ctx.strokeStyle = color;
    ctx.translate(150, 150);
    ctx.rotate(rotation);
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.restore();
}