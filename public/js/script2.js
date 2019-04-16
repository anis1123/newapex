$('.burgerbar').fadeOut()

$('#burger-close').fadeOut()

$('#burger-menu').click(function(){

 $('.burgerbar').toggle()


})
$('#burger-menu').click(function(){

 $('.burgerbar').css({
	 'transform':'translateX(-1%)',
	 'transition':'all 400ms linear'
 });


});


$('#burger-close').click(function(){

 $('.burgerbar').css({
	 'transform':'none',
	 'transition':'all 400ms linear'
 });

});




$('#burger-close').click(function(){

 $('.burgerbar').toggle()


});
$('#burger-close').click(function(){

 $(this).fadeOut()


});
$('#burger-close').click(function(){

 $('#burger-menu').fadeIn();


});


$('#burger-menu').click(function(){

$('#burger-close').fadeIn()


});
$('#burger-menu').click(function(){

$(this).fadeOut()


});





$('.particle').circleMagic({

  elem: '.particle',

  color: 'rgba(255,255,255,.5)',

  radius: 4,

  densety: 0.3,

 clearOffset: 1

});



  $(document).ready(function() {
    $(".teacher").lightSlider({
		item: 3,
		slideMove: 1,
        mode: "slide",
		 speed: 900, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 8000,
	} );
  });

  $(document).ready(function() {
    $(".image-event").lightSlider({
		item: 1,
		slideMove: 1,
        mode: "slide",
		 speed: 400, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,
	} );
  });




  $(document).ready(function() {
    $(".newscarousel").lightSlider({
		item: 5,
		slideMove: 1,
        mode: "slide",
		 speed: 400, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',
	} );
  });


  $(document).ready(function() {
    $(".card-card").lightSlider({
		item: 4,

		 speed: 400, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,

        prevHtml: '',
        nextHtml: '',
	} );
  });



  $('#responsiveTabsDemo').responsiveTabs({
    startCollapsed: 'accordion'
});
