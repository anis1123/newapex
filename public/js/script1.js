new WOW().init();




$(function(){

  $(window).scroll(function(){


		if($(window).scrollTop()>300){
			$('.about-img img').animate({

				right:'0'
			})

		}


});

  });$(function(){

  $(window).scroll(function(){


		if($(window).scrollTop()>1500){
			$('.about-img2 img').animate({

				left:'0'
			})

		}


});

  });

$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up
$(window).resize(function(){
	if ($(window).width() >= 980){

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show");
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");
      });

		// do something here
	}
});



// document ready
});

$(function(){

	$('.navbar-nav>li').hover(function(){

				$('nav').addClass('.top-nav-collapse')
						  });


});
