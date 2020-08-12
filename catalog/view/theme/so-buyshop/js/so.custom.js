/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 
	


	// Messenger Top Link
	$('.list-msg').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		dots: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 30,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	//search
	$( ".header_search .btn-search" ).click(function() {
		$('.sosearchpro-wrapper').slideToggle(200);
		$(this).toggleClass('active');
	});



	// Close pop up countdown
	 $( "#so_popup_countdown .customer a" ).click(function() {
	  $('body').toggleClass('hidden-popup-countdown');
	 });
	// =========================================


	// click header search header 
	jQuery(document).ready(function($){
		$( ".search-header-w .icon-search" ).click(function() {
		$('#sosearchpro .search').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

	// add class Box categories
	jQuery(document).ready(function($){

		if($("#accordion-category .panel .panel-collapse").hasClass("in")){
			$('#accordion-category .panel .accordion-toggle').addClass("show");			
		} 
		else{
			$('#accordion-category .panel .accordion-toggle').removeClass("show");
		}

	});

	// Slider Logo Home 1 - g2shop
	jQuery(document).ready(function($) {
	    var slider2 = $(".slider-brands-layout1 .slider-brand");
	    slider2.owlCarousel2({    
	    margin:0,
	    nav:true,
	    loop:true,
	    dots: false,
	    responsive:{
	            0:{
	                items:2
	            },
	            480:{
	                items:3
	            },
	            768:{
	                items:4
	            },
	            992:{
	                items:5
	            },
	            1200:{
	                items:6
	            },
	        },
	    })
	});

	// click header search mobile
	jQuery(document).ready(function($){
		$( ".search-header-w .search-mobi" ).click(function() {
		$('.sosearchpro-wrapper').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

	// Slider Testimonials - g2shop
	$('.testimonials-layout1 .testimonials').owlCarousel2({
		pagination: true,
		center: false,
		nav: false,
		loop: true,
		slideBy: 1,
		autoplay: false,
		margin: 0,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});
	// custom to show footer center
	$(".button-toggle").click(function () {
		if($(this).children('.showmore').hasClass('active')) $(this).children().removeClass('active');
		else $(this).children().addClass('active');
		
		
		
		if($(this).prev().hasClass('showdown')) $(this).prev().removeClass('showdown').addClass('showup');
		else $(this).prev().removeClass('showup').addClass('showdown');
	}); 


	$(".clearable").each(function() {
  
	  var $inp = $(this).find("input:text"),
	      $cle = $(this).find(".clearable__clear");

	  $inp.on("input", function(){
	    $cle.toggle(!!this.value);
	  });
	  
	  $cle.on("touchstart click", function(e) {
	    e.preventDefault();
	    $inp.val("").trigger("input");
	  });
	  
	});

});
