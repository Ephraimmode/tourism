// small screen menu toggle script

$("document").ready(function(){
	$("#bu").click(function(){
		$(".menubgleft").toggle("slow");
	});
});


// slider js
$("document").ready(function(){
	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 1000,
		smartSpeed: 1500,
		autoplayHoverPause: true,
	})
});
