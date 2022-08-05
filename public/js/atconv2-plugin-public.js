function isScrolledIntoView(elem) {
	var docViewTop = jQuery(window).scrollTop();
	var docViewBottom = docViewTop + jQuery(window).height();
	var elemTop = jQuery(elem).offset().top;
	var elemBottom = elemTop + jQuery(elem).height();
	return elemBottom <= docViewBottom && elemTop >= docViewTop;
}
jQuery(window).scroll(function () {
	jQuery(".post-teaser-banner__content__claim ").each(function () {
	  if (isScrolledIntoView(this) === true) {
		jQuery(this).addClass("reduceSize");
		jQuery(".post-teaser-banner__image img").addClass("reduceImg");
	  } else {
		jQuery(this).removeClass("reduceSize");
		jQuery(".featured_img").removeClass("reduceImg");
	  }
	});
  });