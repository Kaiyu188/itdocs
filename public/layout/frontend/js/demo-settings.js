jQuery(document).ready(function() {
	jQuery("body").append("<div class='demo-settings'></div>");
	jQuery(".demo-settings").append("<a href='#show-settings' class='demo-button'><i class='fa fa-gear'></i>Settings</a>");
	jQuery(".demo-settings").append("<div class='demo-options'>"+
										"<div class='title'>Demo Settings</div>"+
										"<a href='#demo' rel='font-options' class='option'><i class='fa fa-font'></i><span>Font settings</span><font>Menu and heading font</font></a>"+
										"<div class='option-box' rel='font-options'>"+
											"<div alt='font-options'>"+
												"<b class='sub-title'>Titles Font</b>"+
												"<a href='#' class='font-bulb active' style='font-family:\"Open Sans\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Raleway\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Oswald\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Playfair Display\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Lato\", sans-serif;'>Aa</a>"+
											"</div>"+
										"</div>"+
										"<div class='option-box sequal' rel='font-options'>"+
											"<div alt='font-options2'>"+
												"<b class='sub-title'>Paragraph & body Font</b>"+
												"<a href='#' class='font-bulb' style='font-family:\"Open Sans\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb active' style='font-family:\"Raleway\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Oswald\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Playfair Display\", sans-serif;'>Aa</a>"+
												"<a href='#' class='font-bulb' style='font-family:\"Roboto Condensed\", sans-serif;'>Aa</a>"+
											"</div>"+
										"</div>"+

										"<a href='#demo' rel='background' class='option'><i class='fa fa-desktop'></i><span>Background</span><font>Backgorund variations</font></a>"+
										"<div class='option-box' rel='background'>"+
											"<div alt='background'>"+
												"<b class='sub-title'>Background Texture</b>"+
												"<a href='#' class='color-bulb active' style='background: #F2F2F2;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: #2A2A2A;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-pentagon.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-lodyas.png);'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background: url(images/background-triangular.png);'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										"<div class='option-box sequal' rel='background'>"+
											"<div alt='background-boxed'>"+
												"<b class='sub-title'>Boxed Background Texture</b>"+
												"<a href='#' class='color-bulb' style='background-image: url(images/background-photo-1.jpg);background-size: 100%; background-attachment: fixed;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background-image: url(images/background-photo-2.jpg);background-size: 100%; background-attachment: fixed;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background-image: url(images/background-photo-3.jpg);background-size: 100%; background-attachment: fixed;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background-image: url(images/background-photo-4.jpg);background-size: 100%; background-attachment: fixed;'>&nbsp;</a>"+
												"<a href='#' class='color-bulb' style='background-image: url(images/background-photo-5.jpg);background-size: 100%; background-attachment: fixed;'>&nbsp;</a>"+
											"</div>"+
										"</div>"+
										"<a href='#demo' rel='body-color' class='option'><i class='fa fa-paint-brush'></i><span>Body color</span><font>Dark or Light</font></a>"+
										"<div class='option-box' rel='body-color'>"+
											"<div alt='body-color'>"+
												"<b class='sub-title'>Change Body Color</b>"+
												"<a href='#' class='body-bulb option-bulb' rel='dark'>Dark</a>"+
												"<a href='#' class='body-bulb option-bulb active' rel='light'>Light</a>"+
											"</div>"+
										"</div>"+
										"<a href='#demo' rel='menu-color' class='option'><i class='fa fa-paint-brush'></i><span>Menu color</span><font>Dark or Light</font></a>"+
										"<div class='option-box' rel='menu-color'>"+
											"<div alt='menu-color'>"+
												"<b class='sub-title'>Change Menu Color</b>"+
												"<a href='#' class='menu-bulb option-bulb active' rel='dark'>Dark</a>"+
												"<a href='#' class='menu-bulb option-bulb' rel='light'>Light</a>"+
											"</div>"+
										"</div>"+
										"<a href='#demo' rel='page-width' class='option'><i class='fa fa-columns'></i><span>Change layout</span><font>Wide or boxed</font></a>"+
										"<div class='option-box' rel='page-width'>"+
											"<div alt='option-box'>"+
												"<b class='sub-title'>Switch Page Width</b>"+
												"<a href='#' class='option-bulb' rel='full'>Full-Width</a>"+
												"<a href='#' class='option-bulb active' rel='boxed'>Boxed</a>"+
											"</div>"+
										"</div>"+
									"</div>");

    jQuery(".demo-settings a[href=#demo]").click(function () {
        var thiselem = jQuery(this);
        if (thiselem.parent().find("div[rel=" + thiselem.attr("rel") + "]").hasClass("thisis") == false) {
            thiselem.parent().find("div.thisis").removeClass("thisis").animate({
                height: 'toggle',
                paddingTop: 'toggle',
                opacity: 'toggle'
            }, 150);
        }
        thiselem.parent().find("div[rel=" + thiselem.attr("rel") + "]").toggleClass("thisis").animate({
            height: 'toggle',
            paddingTop: 'toggle',
            opacity: 'toggle'
        }, 150);
        return false;
    });

	jQuery(".option-box div .color-bulb").click(function(){
		var thiselem = jQuery(this);
		var newcolor = thiselem.css("background-color");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "color-options"){
			jQuery(".widget-social a i, .tag-cloud a, .widget-post-circle, .post-cats a").css("background-color", newcolor);
			jQuery(".footer-socials .social, .footer-menu a, .footer-bottom a").css("color", newcolor);
		}else
		if(thiselem.parent().attr("alt") == "header-colors"){
			jQuery(".header").css("background-color", newcolor);
		}else
		if(thiselem.parent().attr("alt") == "footer-colors"){
			jQuery(".footer").css("background-color", newcolor);
		}

		return false;
	});

	jQuery(".option-box div .color-bulb").click(function(){
		var thiselem = jQuery(this);
		var newcolor = thiselem.css("background-image");
		var newcolor_1 = thiselem.css("background-position");
		var newcolor_2 = thiselem.css("background-repeat");
		var newcolor_3 = thiselem.css("background-attachment");
		var newcolor_4 = thiselem.css("background-origin");
		var newcolor_5 = thiselem.css("background-clip");
		var newcolor_6 = thiselem.css("background-color");
		var newcolor_7 = thiselem.css("background-size");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "background"){
			jQuery("body").css("background-image", newcolor).css("background-position", newcolor_1).css("background-repeat", newcolor_2).css("background-attachment", newcolor_3).css("background-origin", newcolor_4).css("background-clip", newcolor_5).css("background-color", newcolor_6).css("background-size", newcolor_7);
		}

		if(thiselem.parent().attr("alt") == "background-boxed"){
			jQuery(".boxed").addClass("active");
			jQuery("body").css("background-image", newcolor).css("background-position", newcolor_1).css("background-repeat", newcolor_2).css("background-attachment", newcolor_3).css("background-origin", newcolor_4).css("background-clip", newcolor_5).css("background-color", newcolor_6).css("background-size", newcolor_7);
		}

		return false;
	});

    // change font
	jQuery(".option-box div .font-bulb").click(function(){
		var thiselem = jQuery(this);
		var newfont = thiselem.css("font-family");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "font-options"){
			jQuery("h1, h2, h3, h4, h5, h6, .widget .title .item strong, .widget .article-block .item-button, .ot-slide .ot-slider-layer a .content-bottom > strong").css("font-family", newfont);
		}else
		if(thiselem.parent().attr("alt") == "font-options2"){
			jQuery("p, .ot-panel-block .title-block span, .split-block > #sidebar .widget > .title-block span, .ot-panel-block .title-block span, .top-menu").css("font-family", newfont);
		}else
		if(thiselem.parent().attr("alt") == "font-options3"){
			jQuery("#main-menu").css("font-family", newfont);
		}

		return false;
	});

    // change boxed full-width
	jQuery(".option-box div .option-bulb").click(function(){
		var thiselem = jQuery(this);
		var newsize = thiselem.attr("rel");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "option-box"){
			if(newsize == "boxed"){
				jQuery(".boxed").addClass("active");
			}else
			if(newsize == "full"){
				jQuery(".boxed").removeClass("active");
			}
			jQuery(document).resize();
		}

		return false;
	});

    // change body color
	jQuery(".option-box div .body-bulb").click(function(){
		var thiselem = jQuery(this);
		var newsize = thiselem.attr("rel");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "body-color"){
			if(newsize == "dark"){
    			jQuery("body").css("background-color", "#2A2A2A");
    			jQuery(".boxed").css("background-color", "#1D1D1D");
    			jQuery(".ot-wide").css("background-color", "#412F31");
				jQuery(".boxed").addClass("active");
				jQuery(".ot-section-a").addClass("ot-dark");
				jQuery(".ot-section-b").addClass("ot-dark");

    			jQuery("nav.main-menu").css("background-color", "#1D1D1D");
    			jQuery("nav.main-menu ul.menu li a").css("color", "#FFFFFF");
			}else
			if(newsize == "light"){
    			jQuery("body").css("background-color", "#F2F2F2");
    			jQuery(".boxed").css("background-color", "#FFFFFF");
    			jQuery(".ot-wide").css("background-color", "#C4C4C5");
				jQuery(".boxed").addClass("active");
				jQuery(".ot-section-a").removeClass("ot-dark");
				jQuery(".ot-section-b").removeClass("ot-dark");

    			jQuery("nav.main-menu").css("background-color", "#fff");
    			jQuery("nav.main-menu ul.menu li a").css("color", "#323232");
			}
			jQuery(document).resize();
		}

		return false;
	});

    // change menu color
	jQuery(".option-box div .menu-bulb").click(function(){
		var thiselem = jQuery(this);
		var newsize = thiselem.attr("rel");
		thiselem.siblings().removeClass("active");
		thiselem.addClass("active");

		if(thiselem.parent().attr("alt") == "menu-color"){
			if(newsize == "dark"){
    			jQuery("ul.menu").css("background-color", "#353537");
    			jQuery("nav.main-menu ul.menu li a").css("color", "#F2F2F2");
			}else
			if(newsize == "light"){
    			jQuery("ul.menu").css("background-color", "#fff");
    			jQuery("nav.main-menu ul.menu li a").css("color", "#323232");
			}
			jQuery(document).resize();
		}

		return false;
	});

	var leavetime = '';

	jQuery(".demo-settings").mouseleave(function(){
		var thiselem = jQuery(this);
		leavetime = setTimeout(function(){
			thiselem.removeClass("active");
		}, 600);
		return false;
	});

	jQuery(".demo-settings").mouseover(function(){
		clearTimeout(leavetime);
		return false;
	});

	jQuery(".demo-settings .demo-button").click(function(){
		jQuery(".demo-settings").addClass("active");
		return false;
	});
});