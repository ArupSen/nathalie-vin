// Site specific js code
(function(){
  'use strict';
  jQuery('#carousel').carouFredSel({
    width: '100%',
      items: {
        visible: 3,
          start: 0
      },
      scroll: {
        items: 1,
          duration: 600,
          timeoutDuration: 3000
      },
      prev: '#prev',
      next: '#next',
      height: 488,
      auto: false
  });
  $('#carousel').find('img').removeClass('img-responsive');

  // carousel on the details pages is bootstrap
  $('.carousel').carousel({
    pause: "false",
    interval: 3000
  });
  var $left = $('.left').find('span').first();
  var $right = $('.right').find('span').first();
  $left.removeClass();
  $right.removeClass();
  $left.text("<");
  $right.text(">");
  // hovering over the big thumbnails on works pages
  $('a.thumbnail').on('mouseenter', function() {
    $(this).find('span').show();
    $(this).find('img').css({"opacity":0.5, "border": "4px solid #fff"});
  });
  $('a.thumbnail').on('mouseleave', function() {
    $(this).find('span').hide();
    $(this).find('img').css({"opacity":1, "border":"none"});
  });
  // add horizontal rules under nav elements
  $('ul#navbar li').append('<hr>');
  $('.dropdown-menu').addClass('works-menu');
  $('.works-menu').find('li').first().addClass('fine-art');
  $('.works-menu').find('li').eq(1).addClass('commissions');
}());
