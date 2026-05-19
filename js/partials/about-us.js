(function ($) {
	var mobileQuery = window.matchMedia('(max-width: 767.98px)');

	function toggleMobileCarousel($slider) {
		if (mobileQuery.matches) {
			if (!$slider.hasClass('owl-loaded')) {
				$slider.addClass('owl-carousel').owlCarousel({
					items: 1,
					margin: 16,
					dots: true,
					nav: false,
					autoplay: true,
					loop:true,
					autoHeight: true,
					smartSpeed: 450
				});
			}
			return;
		}

		if ($slider.hasClass('owl-loaded')) {
			$slider.trigger('destroy.owl.carousel');
			$slider.removeClass('owl-carousel owl-loaded');
			$slider.find('.owl-stage-outer').children().unwrap();
		}
	}

	$(function () {
		var $sliders = $('.about-us-partial-476df8 .grid-slide');

		if (!$sliders.length || typeof $.fn.owlCarousel === 'undefined') {
			return;
		}

		$sliders.each(function () {
			toggleMobileCarousel($(this));
		});

		$(window).on('resize.aboutUsCarousel', function () {
			$sliders.each(function () {
				toggleMobileCarousel($(this));
			});
		});
	});
})(jQuery);