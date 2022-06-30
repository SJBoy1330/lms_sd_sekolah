setTimeout(function() {
    $('.card-stretch').each(function(i) {
        setTimeout(function() {
             $('.card-stretch').eq(i).addClass('fadein-bottom');
        }, 150 * i);
    });
    $('.three-card').each(function(i) {
        setTimeout(function() {
            $('.three-card').eq(i).addClass('fadein-bottom');
        }, 150 * i);
    });
}, 150 );

var slider = tns({
    container: '.my-slider',
    controlsContainer: '#controls',
    prevButton: '.previous',
    nextButton: '.next',
    "items":4,
    "autoplay":false,
    "autoplayTimeout": 18000,
    "loop": false,
    "swipeAngle": false,
    "speed": 1000,
    "controls": true,
    "nav":true,
    "navPosition":"bottom",
    responsive: {
      350: {
        items: 1,
      },
      600: {
        
        items: 3
      },
      900: {
        items: 4
      }
    }
  });

