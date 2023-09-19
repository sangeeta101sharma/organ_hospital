$(document).ready(function(){
    
	// Animate loader off screen
	 $("#pageloader").fadeOut(3000);

	 
	// banner carousel
	$('.homebannercarousel').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
	    loop:true,
	    nav:true,
	    dots:false,
	    autoplay:true,
	    autoplayTimeout:6000, 
	    items:1,
	    margin:0,
	    stagePadding:0,
	    smartSpeed:450
	});


	 


 	//side panel close popup  	
	$(".menubar_mobile").click(function(e) {
		$(".mob_sidepanel").toggleClass("show");	
		/*$(".mob_sidepanel .overlay").addClass("opac");	*/	
	}); 
 


	//backto top
	if ($('#back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#back-to-top').addClass('show');
				} else {
					$('#back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('#back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}


	//wow js
	new WOW().init();
    

	// specialitycarousel carosal carousel
	$('.specialitycarousel').owlCarousel({
	    loop:true,
	    nav:true,
	    dots:false,
	    autoplay:false,
	    autoplayTimeout:6000, 
	    items:4,
	    margin:3,
	    stagePadding:0,
	    smartSpeed:450,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:2,
	            nav:true,
	            loop:true
	        },
	        600:{
	            items:2, 
	            nav:true,
	            loop:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	            loop:true
	        },
	        1200:{
	            items:4,
	            nav:true,
	            loop:true
	        }
	    }
	})
	  
	  
	 // specialitycarousel carosal carousel
	$('.OPD-Timings-sec').owlCarousel({
	    loop:true,
	    nav:true,
	    dots:false,
	    autoplay:false,
	    autoplayTimeout:6000, 
	    items:4,
	    margin:3,
	    stagePadding:0,
	    smartSpeed:450,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:2,
	            nav:true,
	            loop:true
	        },
	        600:{
	            items:2, 
	            nav:true,
	            loop:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	            loop:true
	        },
	        1200:{
	            items:4,
	            nav:true,
	            loop:true
	        }
	    }
	})
	  
	
	// close youtube video
	/*$(".videopopup .fancybox-close-small").click(function(){
		var video = $(".videopopup iframe").attr("src");
		$(".videopopup iframe").attr("src","");
		$(".videopopup iframe").attr("src",video);
	})*/
	// close youtube video


	// testimonial carosal carousel
	$('.testimonialcarousel').owlCarousel({
	    loop:true,
	    nav:true,
	    dots:false,
	    autoplay:false,
	    autoplayTimeout:6000, 
	    items:2,
	    margin:20,
	    stagePadding:0,
	    smartSpeed:450,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true,
	            loop:true
	        },
	        600:{
	            items:1,
	            nav:true,
	            loop:true
	        },
	        1000:{
	            items:2,
	            nav:true,
	            loop:true
	        },
	        1200:{
	            items:2,
	            nav:true,
	            loop:true
	        }
	    }
	})
    
    
  
jQuery(document).ready(function(){
    if(jQuery('.sb-container').length > 0){
    $(".sb-container").scrollBox();
}
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
    
	
})


