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


// story comment section

$("document").ready(function(){
	$("#commentBtn, #viewComment").click(function(){
		$(".comment").show("slow");
	});
});

// comment colse btn

$("document").ready(function(){
	$("#closeComment").click(function(){
		$(".comment").hide("slow");
	});
});


















