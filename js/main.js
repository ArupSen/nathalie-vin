// Site specific js code
(function(){
  'use strict';
	jQuery('#carousel').carouFredSel({
				width: '100%',
				items: {visible: 3,
					start: 0 
				},
				scroll: {
					items: 1,
					duration: 600,
					timeoutDuration: 3000
				},
				prev: '#prev',
				next: '#next'
			});
  // hovering over the big thumbnails on works pages
  $('a.thumbnail').on('mouseenter', function() {
    $(this).find('span').show();
    $(this).find('img').css({"opacity":0.7, "border": "4px solid #fff"});
  });
  $('a.thumbnail').on('mouseleave', function() {
    $(this).find('span').hide();
    $(this).find('img').css({"opacity":1, "border":"none"});
  });
}());
