jQuery(function ($) {
	$(document).ready(function () {
		var width = $(window).width();


		//Sticky header

		var headerImageHeight = $('.header-image').outerHeight();
		var mainNavbar=$('.main-navbar');
		var mainNavbarHeight=mainNavbar.outerHeight();
		var mobileNavbar=$('.mobile-navbar');
		var mobileNavbarHeight=mobileNavbar.outerHeight();		

		if(width<960) {
			//En mobile: navbar sticky dès le chargement de la page
			mobileNavbar.addClass('js-sticky-header');
			$('.site-header').css('margin-top',mobileNavbarHeight+'px');
			$('.mobile-sidebar').css('top',mobileNavbarHeight+'px');
		} else {
			//En desktop, on déclenche sticky au scroll

			var adminbar=$('#wpadminbar');
			var adminbarHeight=0;
			if(adminbar.length>0) {
				adminbarHeight=adminbar.outerHeight();
			}
			var desktopOffset=adminbarHeight+mainNavbarHeight;

			$(window).scroll(function () { // scroll event
				var windowTop = $(window).scrollTop(); // returns number
				if (windowTop > headerImageHeight) {
					mainNavbar.addClass('js-sticky-header');
					mainNavbar.css('top',adminbarHeight);
					$('.site-content').css('padding-top',desktopOffset+'px');
				} else {
					mainNavbar.removeClass('js-sticky-header');
					mainNavbar.css('top','0');
					$('.site-content').css('padding-top','0');
				}
			});
		}


		//Centrer section défilable 3 vignettes en mobile + navigation aux flèches
		if(width < 768) {
			var vignettes = $('.trois-encadres');
			if(vignettes.length > 0) {
				var largeurVignette=$('.encadre-wrapper').outerWidth();
				var scroll= 10 + 3*largeurVignette/2 - width/2;
				var initialLeft = -1 * scroll;
				var slider = $('.trois-encadres .slider');
				//slider.css('left',initialLeft);
				slider.scrollLeft(scroll);

				var derniere=parseInt(slider.attr('data-nombre'));
				var flecheSlider=$('.fleche-slider');

				flecheSlider.click(function (e) { 
					var active=parseInt(slider.attr('data-active'));
					var direction=parseInt($(this).attr("data-direction"));
					var newSlide=active+direction;
					if(newSlide >= 0 && newSlide < derniere) {
						var newLeft=newSlide * scroll;
						slider.scrollLeft(newLeft);
						slider.attr('data-active',newSlide);
					}
					/*if(newSlide===0) {
						$('.fleche-slider.gauche').hide();
					} else {
						$('.fleche-slider.gauche').show('slow');
					}
					if(newSlide===derniere-1) {
						$('.fleche-slider.droite').hide();
					} else {
						$('.fleche-slider.droite').show('slow');
					}*/
				});
			}

			
		}

	});
});