jQuery(function ($)
{
	'use strict';

	/*------------------
	/* ----------------------------*/
	$('.mean-menu').meanmenu(
	{
		meanScreenWidth: '1199',
	});
	if (window.matchMedia('screen and (max-width: 768px)').matches) {
		$('#expand-contract').addClass('collasped')

	}
	var Name = $('#profilename').text();
	var firstName
	var lastName
	var intials
	var fname = Name.split(" ");
	// alert(fname[0]);
	if(fname[0]){
		firstName =fname[0];
		 intials = firstName.charAt(0) ;
	}
	if(fname[0] && fname[1]){
		lastName =fname[1];
		 intials = firstName.charAt(0) + lastName.charAt(0) ;
	}
	
	var profileImage = $('#profileImage').text(intials);
	$(window).on('scroll', function ()

	{
		$(window).scrollTop() >= 200 ? $('.main-navbar-area').addClass('stickyadd') : $('.main-navbar-area').removeClass('stickyadd');
		$(window).scrollTop() >= 170 ? $('#expand-contract').addClass('collasped') : $('#expand-contract').removeClass('collasped');
		$(window).scrollTop() >= 170 ? $('#bottom-section').addClass('hide') : $('#bottom-section').removeClass('hide');
	});
	
	$('#languageButton').on('click', function (e)
	{
		$('.language > .menu').toggle();
		e.preventDefault();
	});
	$('#control li').on('click', function ()
	{
		$(this).addClass('active').siblings().removeClass('active');
	});
	// $('.youtube-popup').magnificPopup(
	// {
	// 	disableOn: 320,
	// 	type: 'iframe',
	// 	mainClass: 'mfp-fade',
	// 	removalDelay: 160,
	// 	preloader: false,
	// 	fixedContentPos: false
	// });
	// $('#searchButton').magnificPopup(
	// {
	// 	removalDelay: 500,
	// 	callbacks:
	// 	{
	// 		beforeOpen: function ()
	// 		{
	// 			this.st.mainClass = this.st.el.attr('data-effect');
	// 		}
	// 	},
	// 	midClick: true
	// });
	$('.tab-slider').owlCarousel(
	{
		loop:true,
		margin: 5,
		items: 1,
		autoHeight: false,
		// dots: false,
		dots: true,
        // dotsData: true,
		dotsContainer: '#owl-custom-dots',
		nav: false,
		navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
		autoplay: true,
		autoplayHoverPause: true,
		// autoplayTimeout: 8500,
		// smartSpeed: 450,
		animateIn: 'fadeIn',
        animateOut: 'fadeOut'
	});
	var bannerSlider = $('.tab-slider');
	$('.owl-dot').click(function ()
	{
		bannerSlider.trigger('to.owl.carousel', [$(this).index(), 300]);
		
	});
	$('.banner-slider-two').owlCarousel(
	{
		loop: true,
		lazyLoad:true,
		// autoHeight:true,
		margin: 0,
		items: 1,
		dots: false,
		nav: true,
		// animateOut: 'fadeOut',
		navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 8500,
		smartSpeed: 1000
	});
	$('.details-slider').owlCarousel(
		{
			loop: true,
			lazyLoad:true,
			// autoHeight:true,
			margin: 0,
			items: 1,
			dots: false,
			nav: false,
			animateOut: 'fadeOut',
			navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
			autoplay: true,
			autoplayHoverPause: true,
			autoplayTimeout: 8500,
			smartSpeed: 1000
	});
	$('.single-slider').owlCarousel(
		{
			loop: true,
			// lazyLoad:true,
			margin: 10,
			items: 4,
			padding:5,
			dots: true,
			nav: true,
			navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
			autoplay: true,
			autoplayHoverPause: true,
			autoplayTimeout: 3000,
			smartSpeed: 1000
		});
		$('.strip-slider').owlCarousel(
			{
				loop: true,
				lazyLoad:true,
				margin: 10,
				// items: 4,
				padding:5,
				dots: false,
				nav: true,
				navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
				autoplay: false,
				autoplayHoverPause: true,
				autoplayTimeout: 3000,
				smartSpeed: 1000,
				responsiveClass: true,
			responsive:
		{
			0:
			{
				items: 2,
				margin: 10
			},
			480:
			{
				items: 3,
			},
			768:
			{
				items: 3,
			},
			991:
			{
				items: 4,
			},
			
		}
		});
	
	$('.banner-slider-three').owlCarousel(
	{
		loop: true,
		margin: 0,
		items: 1,
		dots: false,
		nav: true,
		navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 8500,
		smartSpeed: 1000
	});
	$('.testimonial-slider').owlCarousel(
	{
			loop: true,
			lazyLoad:true,
			margin: 10,
			items: 4,
			padding:5,
			dots:true,
			nav: false,
			navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
			autoplay: true,
			autoplayHoverPause: true,
			autoplayTimeout: 3000,
			smartSpeed: 1000,
			responsiveClass: true,
			responsive:
		{
			0:
			{
				items: 1,
				margin: 10
			},
			480:
			{
				items: 2,
			},
			768:
			{
				items: 3,
			},
			991:
			{
				items: 4,
			},
			
		}
	})
	$('.tours-slider').owlCarousel(
	{
		loop: true,
		margin: 20,
		nav: true,
		navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
		dots: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 8500,
		smartSpeed: 450,
		responsiveClass: true,
		responsive:
		{
			0:
			{
				items: 1,
				margin: 10
			},
			480:
			{
				items: 2,
			},
			768:
			{
				items: 3,
			},
			991:
			{
				items: 4,
			},
			
		}
	})

	$('.slider-up').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayHoverPause: true,

		autoplayTimeout: 3000,
		smartSpeed: 600,
		nav: false,
		responsive: {
		   0: {
			  items: 1
		   },
		   600: {
			  items: 3
		   },
		   1000: {
			  items: 4
		   }
		}
	 })

	 $('.slider-down').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 3500,
		smartSpeed: 800,
		margin: 10,
		nav: false,
		responsive: {
		   0: {
			  items: 1
		   },
		   600: {
			  items: 3
		   },
		   1000: {
			  items: 4
		   }
		}
	 })
	 
	$('body').append("<div class='go-top'><i class='bx bx-up-arrow-alt'></i></div>");
	$(window).on('scroll', function ()
	{
		var scrolled = $(window).scrollTop();
		if (scrolled > 600) $('.go-top').addClass('active');
		if (scrolled < 600) $('.go-top').removeClass('active');
	});
	$('.go-top').on('click', function ()
	{
		$('html, body').animate(
		{
			scrollTop: '0',
		}, 500);
	});
	// $('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
	try
	{
		$('.filtr-container').filterizr();
	}
	catch (err)
	{}
	// $('.date-select').datepicker(
	// {
	// 	format: 'mm/dd/yyyy'
	// });

	function makeTimer()
	{
		var endTime = new Date('September 20, 2022 17:00:00 PDT');
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400);
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < '10')
		{
			hours = '0' + hours;
		}
		if (minutes < '10')
		{
			minutes = '0' + minutes;
		}
		if (seconds < '10')
		{
			seconds = '0' + seconds;
		}
		$('#days').html(days + '<span>Days</span>');
		$('#hours').html(hours + '<span>Hours</span>');
		$('#minutes').html(minutes + '<span>Minutes</span>');
		$('#seconds').html(seconds + '<span>Seconds</span>');
	}
	setInterval(function ()
	{
		makeTimer();
	}, 0);
	// $('select').niceSelect();
	// $('.newsletter-form').validator().on('submit', function (event)
	// {
	// 	if (event.isDefaultPrevented())
	// 	{
	// 		formErrorSub();
	// 		submitMSGSub(false, 'Please enter your email correctly.');
	// 	}
	// 	else
	// 	{
	// 		event.preventDefault();
	// 	}
	// });

	function callbackFunction(resp)
	{
		if (resp.result === 'success')
		{
			formSuccessSub();
		}
		else
		{
			formErrorSub();
		}
	}

	function formSuccessSub()
	{
		$('.newsletter-form')[0].reset();
		submitMSGSub(true, 'Thank you for subscribing!');
		setTimeout(function ()
		{
			$('#validator-newsletter').addClass('hide');
		}, 4000)
	}

	function formErrorSub()
	{
		$('.newsletter-form').addClass('animated shake');
		setTimeout(function ()
		{
			$('.newsletter-form').removeClass('animated shake');
		}, 1000)
	}

	function submitMSGSub(valid, msg)
	{
		if (valid)
		{
			var msgClasses = 'validation-success';
		}
		else
		{
			var msgClasses = 'validation-danger';
		}
		$('#validator-newsletter').removeClass().addClass(msgClasses).text(msg);
	}
	// $('.newsletter-form').ajaxChimp(
	// {
	// 	url: '',
	// 	callback: callbackFunction
	// });
	$(window).on('load', function (e)
	{
		console.log("here i m");
		$('#loading').delay(100).queue(function ()
		{
			$(this).remove();
		});
	});
}($));

function setTheme(themeName)
{
	localStorage.setItem('dilu_theme', themeName);
	document.documentElement.className = themeName;
}

function toggleTheme()
{
	if (localStorage.getItem('dilu_theme') === 'theme-dark')
	{
		setTheme('theme-light');
	}
	else
	{
		setTheme('theme-dark');
	}
}
(function ()
{
	if (localStorage.getItem('dilu_theme') === 'theme-dark')
	{
		setTheme('theme-dark');
		document.getElementById('slider').checked = false;
	}
	else
	{
		setTheme('theme-light');
		document.getElementById('slider').checked = true;
	}
})();


// var tabChange = function () {
// 	var tabs = $('.nav-tabs > li');
// 	var active = tabs.filter('.active');
// 	var next = active.next('li').length ? active.next('li').find('button') : tabs.filter(':first-child').find('button');
// 	// Use the Bootsrap tab show method

// 	next.tab('show');
// };
// // Tab Cycle function
// var tabCycle = setInterval(tabChange, 5000);


// // Tab click event handler
// $('button').on('click', function (e) {
//     console.log("clicked");
//     e.preventDefault();
//     // Stop the cycle
//     clearInterval(tabCycle);
//     // Show the clicked tabs associated tab-pane
//     $(this).tab('show');
//     // Start the cycle again in a predefined amount of time
//     setTimeout(function () {
//         //tabCycle = setInterval(tabChange, 5000);
//     }, 15000);
// });

// looking for form
function expandContract() {
	const el = document.getElementById("expand-contract")
	el.classList.toggle('collasped')
	// el.classList.toggle('collapsed')
 }
 function expandPlanForm() {
	const el = document.getElementById("side-toggle")
	el.classList.toggle('hide-side-bar')
	
	// el.classList.toggle('collapsed')
 }



 
	

