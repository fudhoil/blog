(function ($) {
"use strict";


// meanmenu with sidebar

$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "991"
});

$('.open-mobile-menu').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay,.mobile_one_page li.menu-item a.nav-link').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
})


$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$(".header-sticky").removeClass("sticky");
	} else {
		$(".header-sticky").addClass("sticky");
	}
});


/* Search
-------------------------------------------------------*/
var $searchWrap = $('.search-wrap');
var $navSearch = $('.nav-search');
var $searchClose = $('#search-close');

$('.search-trigger').on('click', function (e) {
	e.preventDefault();
	$searchWrap.animate({ opacity: 'toggle' }, 500);
	$navSearch.add($searchClose).addClass("open");
});

$('.search-close').on('click', function (e) {
	e.preventDefault();
	$searchWrap.animate({ opacity: 'toggle' }, 500);
	$navSearch.add($searchClose).removeClass("open");
});

function closeSearch() {
	$searchWrap.fadeOut(200);
	$navSearch.add($searchClose).removeClass("open");
}

$(document.body).on('click', function (e) {
	closeSearch();
});

$(".search-trigger, .main-search-input").on('click', function (e) {
	e.stopPropagation();
});



/*------------------------------------
	Slider
--------------------------------------*/
if (jQuery(".slider-active").length > 0) {
	let sliderActive1 = '.slider-active';
	let sliderInit1 = new Swiper(sliderActive1, {
		// Optional parameters
		slidesPerView: 1,
		slidesPerColumn: 1,
		paginationClickable: true,
		loop: true,
		effect: 'fade',

		autoplay: {
			delay: 5000,
		},

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
			// clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.slide-next',
			prevEl: '.slide-prev',
		},

		a11y: false
	});

	function animated_swiper(selector, init) {
		let animated = function animated() {
			$(selector + ' [data-animation]').each(function () {
				let anim = $(this).data('animation');
				let delay = $(this).data('delay');
				let duration = $(this).data('duration');

				$(this).removeClass('anim' + anim)
					.addClass(anim + ' animated')
					.css({
						webkitAnimationDelay: delay,
						animationDelay: delay,
						webkitAnimationDuration: duration,
						animationDuration: duration
					})
					.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
						$(this).removeClass(anim + ' animated');
					});
			});
		};
		animated();
		// Make animated when slide change
		init.on('slideChange', function () {
			$(sliderActive1 + ' [data-animation]').removeClass('animated');
		});
		init.on('slideChange', animated);
	}

	animated_swiper(sliderActive1, sliderInit1);
}

// Testimonial Slider
const testimonial_swiper = new Swiper('.testimonial_slider_active', {
	slidesPerView: 1,
	spaceBetween: 30,
	//direction: 'vertical',
	loop: true,
	
	// If we need pagination
	pagination: {
		el: '.testimonial_pagination',
		clickable: true,
	},
	
	breakpoints: {
		350: {
			slidesPerView: 1,
			},
		550: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 1,
		},
		1024: {
			slidesPerView: 1,
		},
	}

});


//testimonial_slider2_active
const testimonial2_swiper = new Swiper('.testimonial_slider2_active', {
	slidesPerView: 1,
	spaceBetween: 30,
	//direction: 'vertical',
	loop: true,
	
	// If we need pagination
	pagination: {
		el: '.testimonial_2_pagination',
		clickable: true,
	},
	
	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	
	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		575: {
			slidesPerView: 1,
		},
		767: {
			slidesPerView: 1,
		},
		991: {
			slidesPerView: 2,
		},
		1199: {
			slidesPerView: 2,
		}
	}

});


//user_active swiper
const user_active = new Swiper('.user_active', {
	slidesPerView: 1,
	spaceBetween: 30,
	// direction: 'vertical',
	loop: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		575: {
			slidesPerView: 2,
		},
		767: {
			slidesPerView: 3,
		},
		991: {
			slidesPerView: 4,
		},
		1199: {
			slidesPerView: 5,
		},
	}

});


//feedback_active
const feedback_active = new Swiper('.feedback_active', {
	slidesPerView: 1,
	spaceBetween: 30,
	//direction: 'vertical',
	loop: true,
	effect: 'flip',
	flipEffect: {
	  slideShadows: false,
	},
	autoplay: {
		delay: 5000,
	},

	// If we need pagination progress
	pagination: {
		el: '.feedback_pagination',
		clickable: true,
		type: "progressbar",
	},
	
	// Navigation arrows
	navigation: {
		nextEl: '.feedback_button_next',
		prevEl: '.feedback_button_prev',
	}

});



//p_carousel_active
const p_carousel_active = new Swiper('.p_carousel_active', {
	slidesPerView: 1,
	spaceBetween: 30,
	// direction: 'vertical',
	loop: true,
	infinite: false,
	centeredSlides: true,

	// If we need pagination progress
	pagination: {
		el: '.feedback_pagination',
		clickable: true,
		type: "progressbar",
	},
	
	// Navigation arrows
	navigation: {
		nextEl: '.feedback_button_next',
		prevEl: '.feedback_button_prev',
	},
	
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		575: {
			slidesPerView: 2,
		},
		767: {
			slidesPerView: 2,
		},
		991: {
			slidesPerView: 3,
		},
		1199: {
			slidesPerView: 3,
		},
		1399: {
			slidesPerView: 4,
		}
	}

});


//portfolio_blog_active
const portfolio_blog_active = new Swiper('.portfolio_blog_active', {
	slidesPerView: 1,
	spaceBetween: 45,
	// direction: 'vertical',
	loop: true,
	infinite: false,
	centeredSlides: true,
	
	// Navigation arrows
	navigation: {
		nextEl: '.p_nav_next',
		prevEl: '.p_nav_prev',
	},
	
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		575: {
			slidesPerView: 1,
		},
		767: {
			slidesPerView: 2,
		},
		991: {
			slidesPerView: 3,
		},
		1199: {
			slidesPerView: 3,
		},
		1399: {
			slidesPerView: 3,
		}
	}

});

// blog2_active

const blog2_active = new Swiper('.blog2_active', {
	slidesPerView: 1,
	spaceBetween: 30,
	//direction: 'vertical',
	loop: true,
	
	// If we need pagination
	pagination: {
		el: '.blog2_pagination',
		clickable: true,
	},
	
	// Navigation arrows
	navigation: {
		nextEl: '.blog2_button_next',
		prevEl: '.blog2_button_prev',
	},
	
	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 2,
		},
		1200: {
			slidesPerView: 3,
		}
	}

});


//slider with thumb image
const slider_thumb = new Swiper('.slider3_thumb_active', {
	loop: true,
	spaceBetween: 15,
	slidesPerView: 5,
	freeMode: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	breakpoints: {
		0: {
			slidesPerView: 2,
			},
		575: {
			slidesPerView: 3,
		},
		767: {
			slidesPerView: 4,
		},
		991: {
			slidesPerView: 5,
		},
		1199: {
			slidesPerView: 5,
		},
		1200: {
			slidesPerView: 5,
		}
	}
});

const slider3 = new Swiper('.slider3_active', {
	loop: true,
	spaceBetween: 30,
	effect: 'fade',
	fadeEffect: {
	  crossFade: true
	},
	navigation: {
	  nextEl: ".slide3_button_next",
	  prevEl: ".slide3_button_prev",
	},
	thumbs: {
	  swiper: slider_thumb,
	},
});


// data background
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})

// data width
$("[data-width]").each(function(){
	$(this).css("width",$(this).attr("data-width"))
})

// data background color
$("[data-bg-color]").each(function(){
	$(this).css("background-color",$(this).attr("data-bg-color"))
})


/* magnificPopup img view */
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


// isotop
$('.portfolio_wrapper').imagesLoaded( function() {
	// init Isotope
	$('.portfolio_images').isotope({
	  itemSelector: '.single_portfolio_image',
	  percentPosition: true,
	  masonry: {
		// use outer width of grid-sizer for columnWidth
		columnWidth: '.single_portfolio_image',
	  }
	});
});


$('.cportfolio_area').imagesLoaded( function() {
	// init Isotope
	var $grid = $('.cportfolio_active').isotope({
	  itemSelector: '.grid-item',
	  percentPosition: true,
	  masonry: {
		// use outer width of grid-sizer for columnWidth
		columnWidth: 1,
	  }
	});
	
	// filter items on button click
	$('.cportfolio_buttons').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  $grid.isotope({ filter: filterValue });
	});

});

//for menu active class
$('.cportfolio_buttons button').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});

// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

// WOW active
new WOW().init();

/*=====| 7. Work Completed Animation |=====*/
	// for active class
	if ($(".work-step-four").hasClass("work-step-completed")) {
		$('.work-completed').addClass('completed-four');
	} else if ($(".work-step-three").hasClass("work-step-completed")) {
		$('.work-completed').addClass('completed-three');
	} else if ($(".work-step-two").hasClass("work-step-completed")) {
		$('.work-completed').addClass('completed-two');
	} else if ($(".work-step-one").hasClass("work-step-completed")) {
		$('.work-completed').addClass('completed-one');
	} else {
		$('.work-completed').addClass('completed-one');
	}
	
	// Active Odometer Counter 
	jQuery('.odometer').appear(function (e) {
		var odo = jQuery(".odometer");
		odo.each(function () {
			var countNumber = jQuery(this).attr("data-count");
			jQuery(this).html(countNumber);
		});
	});



  	// For Hover
	// four
	$(".work-step-four").on('mouseenter',function(){
		$('.work-completed').addClass('completed-four');
		$('.work-step-four').addClass('work-step-completed');
	});
	$(".work-step-four").on('mouseleave',function(){
		$('.work-completed').removeClass('completed-four');
		$('.work-step-four').removeClass('work-step-completed');
	});
	// three
	$(".work-step-three").on('mouseenter',function(){
		$('.work-completed').addClass('completed-three');
		$('.work-step-three').addClass('work-step-completed');
	});
	$(".work-step-three").on('mouseleave',function(){
		$('.work-completed').removeClass('completed-three');
		$('.work-step-three').removeClass('work-step-completed');
	});
	// two
	$(".work-step-two").on('mouseenter',function(){
		$('.work-completed').addClass('completed-two');
		$('.work-step-two').addClass('work-step-completed');
	});
	$(".work-step-two").on('mouseleave',function(){
		$('.work-completed').removeClass('completed-two');
		$('.work-step-two').removeClass('work-step-completed');
	});
	// one
	$(".work-step-one").on('mouseenter',function(){
		$('.work-completed').addClass('completed-one');
		$('.work-step-one').addClass('work-step-completed');
	});
	$(".work-step-one").on('mouseleave',function(){
		$('.work-completed').removeClass('completed-one');
		$('.work-step-one').removeClass('work-step-completed');
	});
	

//Adding class on visibility

$.fn.visible = function(partial) {
    
	var $t            = $(this),
		$w            = $(window),
		viewTop       = $w.scrollTop(),
		viewBottom    = viewTop + $w.height(),
		_top          = $t.offset().top,
		_bottom       = _top + $t.height(),
		compareTop    = partial === true ? _bottom : _top,
		compareBottom = partial === true ? _top : _bottom;
  
  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

};

	$.fn.visible = function(partial) {
	  
		var $t            = $(this),
			$w            = $(window),
			viewTop       = $w.scrollTop(),
			viewBottom    = viewTop + $w.height(),
			_top          = $t.offset().top,
			_bottom       = _top + $t.height(),
			compareTop    = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;
	  
	  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  
	};
	
	$(window).on('scroll',function(event) {
	
		$(".scale-img-animation-left").each(function(i, el) {
		var el = $(el);
			if (el.visible(true)) {
				el.addClass("img-animation-left"); 
			} else {
				el.removeClass("img-animation-left");
			}
		});
		$(".scale-img-animation-right").each(function(i, el) {
		var el = $(el);
			if (el.visible(true)) {
				el.addClass("img-animation-right"); 
			} else {
				el.removeClass("img-animation-right");
			}
		});

		$(".top_right_visible").each(function(i, el) {
			var el = $(el);
				if (el.visible(true)) {
					el.addClass("top_right_visible_animation"); 
				} else {
					el.removeClass("top_right_visible_animation");
				}
		});

		
		$(".width_visible").each(function(i, el) {
			var el = $(el);
				if (el.visible(true)) {
					el.addClass("width_visible_animation"); 
				} else {
					el.removeClass("width_visible_animation");
				}
		});
	
  	});







})(jQuery);