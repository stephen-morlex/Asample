// JavaScript Document

(function($) {
    "use strict";
	
	//calling foundation js
	$(document).foundation();
		
	//Disable Default click behaviour on anchor
	$(".search-icon-toggle").on("click", function(event) { 
		event.preventDefault();
	});
	
	//scroll effect
	$("#top").on("click",function () {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});        
	
	$("#top").on("click",function (event) {
		event.stopPropagation();                
		var idTo = $(this).attr("data-atr");                
		var Position = $("[id='" + idTo + "']").offset();
		$("html, body").animate({ scrollTop: Position }, "slow");
		return false;
	});

	$(window).on("scroll",function() { 
		if($(this).scrollTop() > 1000) { 
			$("#top").fadeIn();
		} else { 
			$("#top").fadeOut();
		}
	});
	
	//Loading animation js
	$(window).on("load",function(){ 
		$("#loading").addClass("loaded");
		$("#loading").html('');
	});
	
	//Animation effect on teacher social links
	$(".teacher").on("mouseenter",function() {
		var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
		$(this).children(".teacher-thumb").children(".teacher-links").addClass("animated zoomIn").on(animationEnd, function() {
		$(this).removeClass("animated zoomIn");
		});
	});

	//calling Brand Crousel
	$(".teachers-wrapper").owlCarousel({
		loop:true,
		margin:40,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			},
			600:{
				items:3,
				nav:false,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			},
			1000:{
				items:4,
				nav:true,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
				loop:true
			}
		}
	});
	
	//Calling Testimonials Crousel
	$(".testimonials").owlCarousel({
		loop:true,
		margin:40,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			},
			600:{
				items:3,
				nav:false,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			},
			1000:{
				items:2,
				nav:true,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
				loop:true
			}
		}
	});
	
	//calling Brand Crousel
	$(".brand-carousel").owlCarousel({
		loop:true,
		margin:60,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			},
			600:{
				items:3,
				nav:false,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			},
			1000:{
				items:5,
				nav:true,
				navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
				loop:true
			}
		}
	});
		
	//Revolution Slider Code Starts
	var revapi4;
	$(document).ready(function() {
		revapi4 = $("#rev_slider_4_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"lib/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				},
				arrows: {
					style:"zeus",
					enable:true,
					hide_onmobile:true,
					hide_under:600,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:30,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:30,
						v_offset:0
					}
				},
				bullets: {
					enable:false,
				}
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%"
			},
			responsiveLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[600,600,500,400],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50],
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	});	//Revolution Slider Ends
					
})(jQuery); //jQuery main function ends strict Mode on 