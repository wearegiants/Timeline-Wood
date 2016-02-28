// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile fs-cell fs-lg-fourth fs-md-fourth fs-sm-third fs-xs-half');
	$(".mobile-toggle").swap();
}

function openModal(){
	$('.open--modal').magnificPopup({
		type: 'inline',
		preloader: false,
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
}

function arrangeBlog(){
	var $grid = $('.grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
	});
	$grid.imagesLoaded().progress( function() {
  	$grid.isotope('layout');
	});
}

$(document).ready(function(){
	mobileMenu();
	openModal();
	arrangeBlog();
});