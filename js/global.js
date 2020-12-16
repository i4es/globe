(function( $ ) {

	function handleFirstTab(e) {
		var key = e.key || e.keyCode;
		if ( key === 'Tab' || key === '9' ) {
			$( 'body' ).removeClass( 'no-outline' );

			window.removeEventListener('keydown', handleFirstTab);
			window.addEventListener('mousedown', handleMouseDownOnce);
		}
	}

	function handleMouseDownOnce() {
		$( 'body' ).addClass( 'no-outline' );

		window.removeEventListener('mousedown', handleMouseDownOnce);
		window.addEventListener('keydown', handleFirstTab);
	}

	window.addEventListener('keydown', handleFirstTab);

	// Fit slide video background to video holder
	function resizeVideo() {
		var $holder = $( '.videoHolder' );
		$holder.each( function() {
			var $that = $( this );
			var ratio = $that.data( 'ratio' ) ? $that.data( 'ratio' ) : '16:9',
				width = parseFloat( ratio.split( ':' )[0] ),
				height = parseFloat( ratio.split( ':' )[1] );
			$that.find( '.video' ).each( function() {
				if ( $that.width() / width > $that.height() / height ) {
					$( this ).css( { 'width': '100%', 'height': 'auto' } );
				} else {
					$( this ).css( { 'width': $that.height() * width / height, 'height': '100%' } );
				}
			} );
		} );
	}

	// Scripts which runs after DOM load

	$( document ).on( 'ready', function() {

		// Init LazyLoad

		var lazyLoadInstance = new LazyLoad({
			elements_selector: 'img[data-lazy-src],.pre-lazyload',
			data_src: "lazy-src",
			data_srcset: "lazy-srcset",
			data_sizes: "lazy-sizes",
			skip_invisible: false,
			class_loading: "lazyloading",
			class_loaded: "lazyloaded",
		});

		// Add tracking on adding any new nodes to body to update lazyload for the new images (AJAX for example)
		window.addEventListener('LazyLoad::Initialized', function (e) {
			// Get the instance and puts it in the lazyLoadInstance variable
			if (window.MutationObserver) {
				var observer = new MutationObserver(function(mutations) {
					mutations.forEach(function(mutation) {
						mutation.addedNodes.forEach(function(node) {
							if (typeof node.getElementsByTagName !== 'function') {
								return;
							}
							imgs = node.getElementsByTagName('img');
							if ( 0 === imgs.length ) {
								return;
							}
							lazyLoadInstance.update();
						} );
					} );
				} );
				var b      = document.getElementsByTagName("body")[0];
				var config = { childList: true, subtree: true };
				observer.observe(b, config);
			}
		}, false);

		// Update LazyLoad images before Slide change
		$( '.slick-slider' ).on( 'beforeChange', function() {
			lazyLoadInstance.update();
		} );

		// Detect element appearance in viewport
		var scrollOut = ScrollOut( {
			threshold: 0.3,
			once: true,
			onShown: function( element ) {
				if ( $( element ).is( '.ease-order' ) ) {
					$( element ).find( '.ease-order__item' ).each( function( i ) {
						var $this = $( this );
						$( this ).attr( 'data-scroll', '' );
						window.setTimeout( function() {
							$this.attr( 'data-scroll', 'in' );
						}, 300 * i );
					} );
				}
			}
		} );


		// Init parallax
		/*$('.jarallax').jarallax({
			speed: 0.5,
		});*/

		// IE Object-fit cover polyfill
		if ( $( '.of-cover' ).length ) {
			objectFitImages( '.of-cover' );
		}

		//Remove placeholder on click
		$( 'input,textarea' ).each( function() {
			$( this ).data( 'holder', $( this ).attr( 'placeholder' ) );

			$( this ).on( 'focusin', function() {
				$( this ).attr( 'placeholder', '' );
			} );

			$( this ).on( 'focusout', function() {
				$( this ).attr( 'placeholder', $( this ).data( 'holder' ) );
			} );
		} );

		//Make elements equal height
		$( '.matchHeight' ).matchHeight();


		// Add fancybox to images
		$( '.gallery-item' ).find('a[href$="jpg"], a[href$="png"], a[href$="gif"]').attr( 'rel', 'gallery' ).attr( 'data-fancybox', 'gallery' );
		$( 'a[rel*="album"], .fancybox, a[href$="jpg"], a[href$="png"], a[href$="gif"]' ).fancybox( {
			minHeight: 0,
			helpers: {
				overlay: {
					locked: false
				}
			}
		} );

		/**
		 * Scroll to Gravity Form confirmation message after form submit
		 */
		$( document ).on( 'gform_confirmation_loaded', function( event, formId ) {
			var $target = $( '#gform_confirmation_wrapper_' + formId );
			if ( $target.length ) {
				$( 'html, body' ).animate( {
					scrollTop: $target.offset().top - 50,
				}, 500 );
				return false;
			}
		} );

		/**
		 * Hide gravity forms required field message on data input
		 */
		$( 'body' ).on( 'change keyup', '.gfield input, .gfield textarea', function() {
			var $field = $( this ).closest( '.gfield' );
			if ( $field.hasClass( 'gfield_error' ) && $( this ).val().length ) {
				$field.find( '.validation_message' ).hide();
			} else if ( $field.hasClass( 'gfield_error' ) && !$( this ).val().length ) {
				$field.find( '.validation_message' ).show();
			}
		} );

		/**
		 * Add `is-active` class to menu-icon button on Responsive menu toggle
		 * And remove it on breakpoint change
		 */
		$( window ).on( 'toggled.zf.responsiveToggle', function() {
			$( '.menu-icon' ).toggleClass( 'is-active' );
		} ).on( 'changed.zf.mediaquery', function( e, value ) {
			$( '.menu-icon' ).removeClass( 'is-active' );
		} );

		/**
		 * Close responsive menu on orientation change
		 */
		$( window ).on( 'orientationchange', function() {
			setTimeout( function() {
				if ( $( '.menu-icon' ).hasClass( 'is-active' ) && window.innerWidth < 641 ) {
					$( '[data-responsive-toggle="main-menu"]' ).foundation( 'toggleMenu' )
				}
			}, 200 );
		} );

		resizeVideo();

	} );


	// Scripts which runs after all elements load

	$( window ).on( 'load', function() {

		//jQuery code goes here
		if ( $( '.preloader' ).length ) {
			$( '.preloader' ).addClass( 'preloader--hidden' );
		}

	} );

	// Scripts which runs at window resize

	$( window ).on( 'resize', function() {

		//jQuery code goes here

		resizeVideo();

	} );

	// Scripts which runs on scrolling

	$( window ).on( 'scroll', function() {

		//jQuery code goes here

	} );
	$(document).ready(function() {
	    $(window).scroll(function() {
	        if ($(this).scrollTop() > 10) {
	            $('.header').css("background", "rgba(255,255,255,1)");
	        } else {
	            $('.header').css("background", "rgba(255,255,255,.8");
	        }
	    });
	});



	// Custom functions START

	jQuery(document).ready(function() {
	    //replace frame video youtube
	    "use strict";
	    jQuery(function() {
	        jQuery(".youtube").each(function() {
	            // Based on the YouTube ID, we can easily find the thumbnail image
	            jQuery(this).css('background-image', 'url(https://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

	            // Overlay the Play icon to make it look like a video player
	            jQuery(this).append(jQuery('<div/>', {
	                'class': 'play'
	            }));

	            jQuery(document).delegate('#' + this.id, 'click', function() {
	                // Create an iFrame with autoplay set to true
	                var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
	                if (jQuery(this).data('params')) iframe_url += '&' + jQuery(this).data('params');

	                // The height and width of the iFrame should be the same as parent
	                var iframe = jQuery('<iframe/>', {
	                    'frameborder': '0',
	                    'allowfullscreen': '',
	                    'src': iframe_url,
	                    'width': jQuery(this).width(),
	                    'height': jQuery(this).height()
	                });

	                // Replace the YouTube thumbnail with YouTube HTML5 Player
	                jQuery(this).replaceWith(iframe);
	            });
	        });
			jQuery(".youtube-single").each(function() {
	            // Based on the YouTube ID, we can easily find the thumbnail image
	            jQuery(this).css('background-image', 'url(https://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

	            // Overlay the Play icon to make it look like a video player
	            jQuery(this).append(jQuery('<div/>', {
	                'class': 'play'
	            }));

	            jQuery(document).delegate('#' + this.id, 'click', function() {
	                // Create an iFrame with autoplay set to true
	                var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
	                if (jQuery(this).data('params')) iframe_url += '&' + jQuery(this).data('params');

	                // The height and width of the iFrame should be the same as parent
	                var iframe = jQuery('<iframe/>', {
	                    'frameborder': '0',
	                    'allowfullscreen': '',
	                    'src': iframe_url,
	                    'width': jQuery(this).width(),
	                    'height': jQuery(this).height()
	                });

	                // Replace the YouTube thumbnail with YouTube HTML5 Player
	                jQuery(this).replaceWith(iframe);
	            });
	        });

	    	jQuery('.gc-video-slider').slick({
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 1021,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						}
					},
					{
						breakpoint: 641,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						}
					}
				]
			});

	    });

	});

	//About spoiler
	jQuery(document).ready(function() {
		jQuery('.spoiler-btn').click(function() {
			if (!jQuery(this).parent('.spoiler-parent').toggleClass('spoiler-active').hasClass('spoiler-active'))
				jQuery('html,body').animate({
					scrollTop: jQuery('.up-spoiler').offset().top
				}, 'slow');
		});
	});

	//Map
	$(document).ready(function() {
		if ( $('.gc-news').length > 0 ) {
		   jQuery(function($){
		       var blockTop = $('.gc-news').offset().top;
		       var CountUpFlag = 0;
		       var $window = $(window);
		   $window.on('load scroll', function() {
		       var top = $window.scrollTop();
		       var height = $window.height();
		       if (top + height >= blockTop && CountUpFlag == 0) {
		           CountUp();
		           CountUpFlag = 1;
		           }
		       });
		       function CountUp() {
		           var current = document.domain;
		           console.log(current);
		           $(".google-map").load("/wp-content/themes/globecore_2020/map-ajax.php");
		         }
		   });
		}

	});

	jQuery(document).ready(function($){
	  	$(".gc-products-row").each(function(){
	    	var getLength = $(this).find('.gc-products__card-wrapper').length;
	    	var item = $(this).find('.gc-products__card-wrapper');
			switch (getLength) {
	  		case 1: item.addClass("full-resp");
	    		break;
	  		case 2: item.addClass("half-resp");
	    		break;
	  		case 3: item.addClass("third-resp");
	    		break;
	  		case 4: item.addClass("fourth-resp");
	    		break;
	  		default: item.addClass("fourth-resp");
			}
	  	});
	});

	jQuery(document).ready(function($){
	  $('.related_post').each(function(){
	    var getLength = $(this).find('.related_ch').length;
	    var item = $(this).find('.related_ch');
	    switch (getLength) {
	        case 1: item.addClass("full-post");
	            break;
	        case 2: item.addClass("half-post");
	            break;
	        case 3: item.addClass("third-post");
	            break;
	        case 4: item.addClass("fourth-post");
	            break;

	    default: item.addClass("fourth-post");
	    }
	    });
	});

	// search modal
	jQuery(function() {
	    jQuery('#search-icon').on('click', function(event) {
	        event.preventDefault();
	        jQuery('#search').addClass('open');
	        jQuery('#search-icon').css({
	            'opacity': '0',
	            'transition': '1s'
	        });
	        jQuery('#search > form > input[type="search"]').focus();
	    });

	    jQuery('#search, #search button.close').on('click keyup', function(event) {
	        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
	            jQuery('#search-icon').css({
	                'opacity': '1',
	                'transition': '1s'
	            });
	            jQuery(this).removeClass('open');
	        }
	    });

	});

	// gallery img clases
	jQuery(document).ready(function($){
	  $('.gc-gallery').each(function(){
	    var getLength = $(this).find('.gc-gallery-link').length;
	    var item = $(this).find('.gc-gallery-link');
	    switch (getLength) {
	        case 1: item.addClass("full-img");
	            break;
	        case 2: item.addClass("half-img");
	            break;
	        case 3: item.addClass("third-img");
	            break;
	        case 4: item.addClass("fourth-img");
	            break;
			case 5: item.addClass("five-img");
	            break;
			case 6: item.addClass("six-img");
	            break;
			case 7: item.addClass("seven-img");
	            break;
			case 8: item.addClass("eight-img");
	            break;
	    default: item.addClass("eight-img");
	    }
	    });
	});

	// Main slider pause button
	jQuery('.slick-pause').on('click', function(){
		var $pauseBtn = jQuery(this);

		if ($pauseBtn.hasClass('paused')){
			jQuery("#home-slider").slick('slickPlay');
			$pauseBtn.removeClass('paused');
		} else {
			jQuery("#home-slider").slick('slickPause');
			$pauseBtn.addClass('paused');
		}
	});

	jQuery('.slick-pause').click(function(){
		jQuery('.slick-pause').toggleClass('play pause');
	});

	jQuery(document).ready(function() {
		jQuery(".mailster-email").click(function(){
			jQuery(".mailster-_recaptcha-wrapper").toggleClass("visible");
		});

	});

}( jQuery ));

