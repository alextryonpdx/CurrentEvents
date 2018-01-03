<script>
function initSlider(){
	$('.reviews').unslider({
		arrows: {
			prev: '<a class="unslider-arrow prev"><img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow.png" /></a>',
			next: '<a class="unslider-arrow next"><img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" /></a>',
		}
	});
}

function lockHeader(){
	if ( $(window).scrollTop() > lockPoint ) {  
	    $('#navbar').addClass("fixed");
	    console.log('true-', $(window).scrollTop());
	} else if ( $(window).scrollTop() <= lockPoint + $('#navbar').height() ) {  
	    $('#navbar').removeClass("fixed");
	    console.log('false-', $(window).scrollTop());
	}
}

function activeSection(){
	position = $(window).scrollTop() + 150;
	for (i = 0; i < targets.length; i++ ) {
		console.log('target offset: ', targets[i]);
		console.log('menu item: ', links[i]);
		if (position >= targets[i] ){
			console.log('window: ', position);
			console.log('next target: ', targets[i+1]);
			console.log('next next target: ', targets[i+2]);
			console.log('i: ', i);
			if (position < targets[i+1] || targets[i+1] == null ){
				$('#navbar li a').removeClass('active');
				active = links[i];
				$(active).addClass('active');
				$('#mobile-navbar li a').removeClass('active');
				mobileActive = mobileLinks[i];
				$(mobileActive).addClass('active');

			}
		}
	}
}

function mobileToggle(){
	$('#mobile-navbar ul').slideToggle()
}

function mobileLink(goTo){
	mobileToggle();
	$.scrollTo(goTo, 400);
}




function scrollCheck(){
	$(window).scroll(function() {
		lockHeader();
		activeSection();
	});
}

$(document).ready(function($) {
	initSlider();	
});

$(window).load(function() {
	// find lockpoint for header
	lockPoint = $('#navbar').offset().top;
	console.log('lockPoint', lockPoint);

	// find all header links
	links = [];
	logo = $('#nav-logo')[0];
	links.push($(logo));
	mobileLinks = [];
	mobileLinks.push('blank');
	$('#mobile-navbar li a').each(function(){
		mobileLinks.push(this);
	});
	$('#navbar li a').each(function(){
		links.push(this);
	});
	// find offsets for each section
	targets = [];
	$('.target').each(function(){
		console.log($(this).attr('id'), $(this).offset().top);
		targets.push( $(this).offset().top + 100 );
	})

	lockHeader();
	activeSection();
	// initiate scroll-based functions
	scrollCheck();
});




</script>




