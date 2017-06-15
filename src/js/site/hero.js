$(window).resize(function(){

	var wh = $(window).height();
  var hh = $('#header').height();

	$('.hero--wh').css({
		height: (wh-hh)*.75,
	});

}).resize();