// Site specific js code
(function(){
  'use strict';
	jQuery('#carousel').carouFredSel({
    width: '100%',
    items: {visible: 3,
      start: 0
    },
    auto: {
      items: 3,
    duration: 3000,
    timeoutDuration: 0,
    pauseOnHover: "immediate",
    easing: "linear"
    },
    prev: '#prev',
    next: '#next'
  });
  // hovering over the big thumbnails on works pages
  $('a.thumbnail').on('mouseenter', function() {
    $(this).find('span').show();
    $(this).find('img').css({"opacity":0.5, "border": "4px solid #fff"});
  });
  $('a.thumbnail').on('mouseleave', function() {
    $(this).find('span').hide();
    $(this).find('img').css({"opacity":1, "border":"none"});
  });
}());
