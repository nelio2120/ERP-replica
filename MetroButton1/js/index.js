
var tileBtn1 = $('div.tiles__tile');
var tileBtn2 = $('div.content-wrap');
var allContentL2 = $('div.content__item');
var allContentL3 = $('div.content3__item');
var contentWrap = $('.content-wrap');
var contentWrap3 = $('.content-wrap3');

/* Cuando se de click al botón level1 */
tileBtn1.on('click touchstart', function() {
  var self = $(this);
  var matchIdL2 = self.attr('data-tile');
  var content = $('div#' + matchIdL2);
  var encabezadoL2 = content.children('.encabezado');
  content.toggleClass('active');
  encabezadoL2.children('span').append($( this ).text());
  contentWrap.css({'transition-delay': '.35s'});
  
  return false;
});


tileBtn2.on('click touchstart', function() {
  var self = $(this);
  var matchIdL3 = self.children('div').attr('data-tile');
  var content3 = $('div#' + matchIdL3);
  var encabezadoL3 = content3.children('.encabezado');
  content3.toggleClass('active');
  encabezadoL3.children('span').append('/');
  encabezadoL3.children('span').append($( this ).text());
 /*  contentWrap3.css({'transition-delay': '.35s'}); */
  return false;
});

$('#arrow-lvl2').on('click touchstart', function() {
  if (allContentL2.hasClass('active')) {
    allContentL2.removeClass('active');
    tileBtn.removeClass('active');
    $('#arrow-lvl2').children('span').empty();
    contentWrap.css({'transition-delay': '.0s'});
  }
});

$('#arrow-lvl3').on('click touchstart', function() {
  if ($('.content3__item').hasClass('active')) {
    $('.content3__item').removeClass('active');
    $('#arrow-lvl3').children('span').empty();
    contentWrap.css({'transition-delay': '.0s'});
  }
});


