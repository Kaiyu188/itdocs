jQuery(function($) {
	"use strict";

	// hide #back-top first
	$("#back-top").hide();

	// fade in #back-top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
	  		$('#back-top').fadeIn();
	  	} else {
	  		$('#back-top').fadeOut();
	  	}
	});

	// toggle submenu for mobile menu
	$( ".sub_menu_toggle" ).on("click", function(){
		$(this).next(".sub-menu").toggle();
	});

	// toggle submenu for mobile menu
	$( ".mega_menu_toggle" ).on("click", function(){
		$(this).next(".ot-mega-menu").toggle();
	});

	$('#insta-owl').owlCarousel({
		loop:true,
		margin:5,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})

	$('#mini-owl').owlCarousel({
		loop:true,
		margin:5,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})

	jQuery('.theiaStickySidebar', 'body').parent().theiaStickySidebar({
		// Settings
		additionalMarginTop: 30
	});

	// Tabbed blocks
	$(".short-tabs").each(function () {
		var thisel = $(this);
		thisel.children("div").eq(0).addClass("active");
		thisel.children("ul").children("li").eq(0).addClass("active");
	});

	$(".short-tabs > ul > li a").on("click", function() {
		var thisel = $(this).parent();
		thisel.siblings(".active").removeClass("active");
		thisel.addClass("active");
		thisel.parent().siblings("div.active").removeClass("active");
		thisel.parent().siblings("div").eq(thisel.index()).addClass("active");
		return false;
	});

	// Accordion blocks
	$(".accordion > div > a").on("click", function() {
		var thisel = $(this).parent();
		if (thisel.hasClass("active")) {
			thisel.removeClass("active").children("div").animate({
				"height": "toggle",
				"opacity": "toggle",
				"padding-top": "toggle"
			}, 300);
		return false;
	}

	// thisel.siblings("div").removeClass("active");
	thisel.siblings("div").each(function () {
		var tz = $(this);
		if (tz.hasClass("active")) {
			tz.removeClass("active").children("div").animate({
				"height": "toggle",
				"opacity": "toggle",
				"padding-top": "toggle"
			}, 300);
		}
	});

	// thisel.addClass("active");
	thisel.addClass("active").children("div").animate({
			"height": "toggle",
			"opacity": "toggle",
			"padding-top": "toggle"
		}, 300);
		return false;
	});

	$(".alert-box .close-alert, .coloralert .close-alert").on("click", function() {
		$(this).parent().fadeOut();
		return false;
	});
 
});
