var tileBtn = $('div.tiles__tile');
var tileBtn2 = $('div.content-wrap');
var allContent = $('div.content__item');
var contentWrap = $('.content-wrap');

/* Cuando se de click al botón level1 */
tileBtn.on('click touchstart', function() {
  var self = $(this);
  var match = self.attr('data-tile');
  var allContent = $('div.content__item');
  /* Va a seleccionar por id: div#1 */
  var content = $('div#' + match);
  content.toggleClass('active');
  $('.arrow').children('span').append($( this ).text());
  contentWrap.css({'transition-delay': '.35s'});
  
  return false;
});


/* Cuando se de click al botón level2 */
tileBtn2.on('click touchstart', function() {
  var self = $(this);
  /* #1a */
  var match3 = self.children('div').attr('data-tile');
  /* div#1a */
  var content3 = $('div#' + match3);
  content3.toggleClass('active');
  $('#arrow-lvl3').children('span').append('/');
  $('#arrow-lvl3').children('span').append($( this ).text());
  return false;
});

$('#arrow-lvl2').on('click touchstart', function() {
  if (allContent.hasClass('active')) {
    allContent.removeClass('active');
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


