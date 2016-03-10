(function ($) {

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
				return false;
		});
	
	// local scroll
	jQuery('.navbar').localScroll({hash:true, offset: {top: 0},duration: 800, easing:'easeInOutExpo'});

	
	// portfolio
	if($('.isotopeWrapper').length){

		var $container = $('.isotopeWrapper');
		var $resize = $('.isotopeWrapper').attr('id');
		// initialize isotope
		
		$container.isotope({
			itemSelector: '.isotopeItem',
			resizable: false, // disable normal resizing
			masonry: {
				columnWidth: $container.width() / $resize
			}


			
		});

		$('#filter a').click(function(){



			$('#filter a').removeClass('current');
			$(this).addClass('current');
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 1000,
					easing: 'easeOutQuart',
					queue: false
				}
			});
			return false;
		});
		
		
		$(window).smartresize(function(){
			$container.isotope({
				// update columnWidth to a percentage of container width
				masonry: {
					columnWidth: $container.width() / $resize
				}
			});
		});
		

}  


	// fancybox
	// jQuery(".fancybox").fancybox();


	if (Modernizr.mq("screen and (max-width:1024px)")) {
			jQuery("body").toggleClass("body");
			
	} else {
		var s = skrollr.init({
			mobileDeceleration: 1,
			edgeStrategy: 'set',
			forceHeight: true,
			smoothScrolling: true,
			smoothScrollingDuration: 300,
				easing: {
					WTF: Math.random,
					inverted: function(p) {
						return 1-p;
					}
				}
			});	
	}



	//scroll menu
	jQuery('.appear').appear();
	jQuery(".appear").on("appear", function(data) {
			var id = $(this).attr("id");
			jQuery('.nav li').removeClass('active');
			jQuery(".nav a[href='#" + id + "']").parent().addClass("active");					
		});


		//parallax
		var isMobile = false;

		if(Modernizr.mq('only all and (max-width: 1024px)') ) {
			isMobile = true;
		}

		
		if (isMobile == false && $('.parallax-spacer').length)
		{


			$(window).stellar({
				responsive:true,
				scrollProperty: 'scroll',
				parallaxElements: false,
				horizontalScrolling: false,
				horizontalOffset: 0,
				verticalOffset: 0
			});

		}
	
	//nicescroll
	$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#191919",cursoropacitymin:.5});
	function initNice() {
		if($(window).innerWidth() <= 960) {
			$('html').niceScroll().remove();
		} else {
			$("html").niceScroll({zindex:999,cursorborder:"",cursorborderradius:"2px",cursorcolor:"#191919",cursoropacitymin:.5});
		}
	}
	$(window).load(initNice);
	$(window).resize(initNice);

})(jQuery);

$(document).ready(function() {
	calcT();
	$('#set-rate-toggle').click(function(){ $('#set-rate').toggle(777); });
	$('#conv-dollar').change(calcD);
	$('#conv-token').keyup(calcT);
	$('#conv-zeny').keyup(calcZ);
	$('#rate-zeny').keyup(calcT).focusout(function(){ $('#set-rate').toggle(777); });
});

function _toD(v) {
	$('#conv-dollar').val(isNaN(v) ? 0 : v.toFixed(2));
}

function _toT(v) {
	$('#conv-token').val(isNaN(v) ? 0 : Math.floor(v));
}

function _toZ(v) {
	$('#conv-zeny').val(isNaN(v) ? 0 : Math.floor(v));
}

// function _getD() {
// 	return isNaN($('#rate-zeny').val()) ? 0 : Math.floor(parseFloat($('#rate-zeny').val()));
// }

function _getZ() {
	var v = isNaN($('#rate-zeny').val()) ? 0 : Math.floor(parseFloat($('#rate-zeny').val()));
	$('#rate-zeny').val(v);
	return v;
}

function calcD() {
	var tok = parseFloat($('#conv-dollar').val());
	_toD(tok);
	_toT(tok * 10);
	_toZ(tok * (_getZ() * 10));
}

function calcT() {
	var tok = Math.floor(parseFloat($('#conv-token').val()));
	_toD(tok * 0.1);
	_toT(tok);
	_toZ(tok * _getZ());
}

function calcZ() {
	var tok = Math.floor(parseFloat($('#conv-zeny').val()));
	_toD(tok / (_getZ() * 10));
	_toT(tok / _getZ());
	_toZ(tok);
}






