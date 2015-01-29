jQuery(function( $ ){

	$(window).resize(function () {
	  var $spy = $('[data-spy="scroll"]').scrollspy('refresh')
	})

	$('.top-nav').localScroll({
	duration:500,
	hash:true,
	offset: -50
	});
});

var picHeight = 1954;
var picWidth = 3000;
var aspectRatio = picWidth / picHeight;
var divWidth, divHeight;

var backgroundSize = function() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var windowAspect = windowWidth / windowHeight;
	if (windowAspect > aspectRatio) {
	    divHeight = windowWidth * picHeight / picWidth;
	    $("#teamBack .main-bg").css({
	        height: divHeight,
	        width: windowWidth,
	        "margin-left": "0",
	        "margin-top": -(divHeight - windowHeight) / 2,
	        "background-size": "100% auto"
	    })
	} else {
	    divWidth = windowHeight * picWidth / picHeight;
	    $("#teamBack .main-bg").css({
	        height: windowHeight,
	        width: divWidth,
	        "margin-top": "0",
	        "margin-left": -((divWidth - windowWidth) / 2),
	        "background-size": "auto 100%"
	    })
	}
};
$(document).ready(backgroundSize);
$(window).resize(backgroundSize);


$(window).ready( function() {
	var s = skrollr.init({
		forceHeight: false
	});
});

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-57266603-1', 'auto');
ga('send', 'pageview');
