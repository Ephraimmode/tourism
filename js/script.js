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


// comment and view comment script

$("document").ready(function(){
	$("#comment, #viewComment").click(function(){
		$(".comment").show("fade");
	});
});

$("document").ready(function(){
		$("#closeComment").click(function(){
			$(".comment").hide("fade");
		});
});

// the publish button to be done with ajax