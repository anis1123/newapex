/**
 * Particleground demo
 * @author Jonathan Nicol - @mrjnicol
 */





// jQuery plugin example:
$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#9000000',
    lineColor: '#800000',
  });
  $('.wow').css({
    'margin-top': -($('.wow').height() / 1),
	  
  });
});
