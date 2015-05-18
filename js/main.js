// Site specific js code
(function(){
  'use strict';
  // carousel on the home page uses slick
  $('#home-carousel').slick({
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    centerPadding: '4px',
    prevArrow: '<div class="slick-prev"><span>&lt;</span></div>',
    nextArrow: '<div class="slick-next"><span>&gt;</span></div>'
  });
  // carousel on the details pages is bootstrap
  $('#carousel-nathalie').carousel({
    pause: "false",
    interval: 3000
  });
  var $left = $('.left').find('span').first();
  var $right = $('.right').find('span').first();
  $left.removeClass();
  $right.removeClass();
  $left.text("<");
  $right.text(">");
  // hovering over the big thumbnails on works pages toggles text
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
//  $('.dropdown-menu').addClass('works-menu');
//  $('.works-menu').find('li').first().addClass('fine-art');
//  $('.works-menu').find('li').eq(1).addClass('commissions');
}());
