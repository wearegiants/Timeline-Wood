// @codekit-prepend "site/shopify--cart.js"
// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile fs-cell fs-lg-fourth fs-md-fourth fs-sm-third fs-xs-half');
	$(".mobile-toggle").swap();
}

function scrollFixed(){
  //$('.product-info').scrollToFixed( { bottom: 0, limit: $('.product-page__footer').offset().top } );

  $('.product-info').scrollToFixed({ 
      //limit: $('.product-page__footer').offset().top 
  });
}

function productHover(){
  $('.btn--products').hover(function(){
    $(".product--swap").swap("activate"); 
  });
  $('#content-wrapper').hover(function(){
    $(".product--swap").swap("deactivate"); 
  });
}

function openModal(){
  $('.open--modal').magnificPopup({
    type: 'inline',
    preloader: false,
    modal: true
  });
  $('.cart-link').magnificPopup({
    type: 'ajax',
    midClick: true,
    removalDelay: 1000,
    alignTop: true,
    overflowY: 'scroll',
    //modal: true,
    mainClass: 'mfp-cart fs-grid',
    callbacks: {
      parseAjax: function(mfpResponse) {
        mfpResponse.data = $(mfpResponse.data).find('#cart');
      },
      ajaxContentAdded: function() {
        $('body').addClass('is-viewing--cart');
      },
      beforeClose: function() {
        $('body').removeClass('is-viewing--cart');  
      }
    }
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

$(function() {
  var masonryPreloadedInit = true;
   // On page load, initiate Masonry
   if($('.grid').length){		
      var $containerPreloaded = $('.grid');   	
      $containerPreloaded.isotope({
         itemSelector: '.grid-item'
         });	
      masonryPreloadedInit = false;
   }
   
   // almComplete
   $.fn.almComplete = function(alm){
      if($('.grid').length){
         var $containerPreloaded = $('.grid');
         if(!masonryPreloadedInit){
            $containerPreloaded.isotope('reloadItems');
            $containerPreloaded.imagesLoaded( function() {
               $containerPreloaded.isotope();
            });
         }
      }
   };
});

$(document).ready(function(){
	mobileMenu();
	openModal();
	arrangeBlog();
  //subscribe();
  productHover();
  //scrollFixed();

  $('#header-navigation .menu-item-has-children').hover(
      function(){
        $('.home__hero').addClass('is-active');
      },
      function(){
        $('.home__hero').removeClass('is-active');
      }
  );

  $('.single-page').onePageNav({
    currentClass: 'current',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function() {
        //I get fired when the animation is starting
    },
    end: function() {
        //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    }
  });
});