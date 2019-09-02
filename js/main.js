(function($) {

	// scroll
	// var scrollWindow = function() {
	// 	$(window).scroll(function(){
	// 		var $w = $(this),
	// 				st = $w.scrollTop(),
	// 				navbar = $('.ftco_navbar'),
	// 				sd = $('.js-scroll-wrap');

	// 		if (st > 150) {
	// 			if ( !navbar.hasClass('scrolled') ) {
	// 				navbar.addClass('scrolled');	
	// 			}
	// 		} 
	// 		if (st < 150) {
	// 			if ( navbar.hasClass('scrolled') ) {
	// 				navbar.removeClass('scrolled sleep');
	// 			}
	// 		} 
	// 		if ( st > 350 ) {
	// 			if ( !navbar.hasClass('awake') ) {
	// 				navbar.addClass('awake');	
	// 			}
				
	// 			if(sd.length > 0) {
	// 				sd.addClass('sleep');
	// 			}
	// 		}
	// 		if ( st < 350 ) {
	// 			if ( navbar.hasClass('awake') ) {
	// 				navbar.removeClass('awake');
	// 				navbar.addClass('sleep');
	// 			}
	// 			if(sd.length > 0) {
	// 				sd.removeClass('sleep');
	// 			}
	// 		}
	// 	});
	// };
	// scrollWindow();

	
	// var counter = function() {
		
	// 	$('#section-counter').waypoint( function( direction ) {

	// 		if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

	// 			var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
	// 			$('.number').each(function(){
	// 				var $this = $(this),
	// 					num = $this.data('number');
	// 					console.log(num);
	// 				$this.animateNumber(
	// 				  {
	// 				    number: num,
	// 				    numberStep: comma_separator_number_step
	// 				  }, 7000
	// 				);
	// 			});
				
	// 		}

	// 	} , { offset: '95%' } );

	// }
	// counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '90%' } );
	};
	contentWayPoint();
	$('.partners-car').owlCarousel({
        items: 4,
        margin: 30,
        loop:true,
	    autoplay:true,
	    autoplayTimeout:2500,
	    autoplayHoverPause:true,
        dots: false,
        responsiveClass:true,
        responsive : {
        	320  : {
        		items: 1
		    },         
		   	360  : {
        		items: 1
		    }, 
		    480  : {
        		items: 2
		    },
		   	768  : {
        		items: 3
		    },
            1024 : {
            	items : 4
            }
		}
	 });

	 $('.container a[href^="#"]').on('click', function(evt){
		var target = $(this).attr('href');
		  $('html, body').stop().animate({scrollTop: $(target).offset().top}, 1000 );
		  evt.preventDefault(); 
	});



})(jQuery);

