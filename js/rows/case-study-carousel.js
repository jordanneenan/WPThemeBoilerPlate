$(document).ready(function(){

	if($('.case_studies_carousel').length){
		$('.case_studies_carousel').slick({
			dots: false,
			arrows: true,
		    autoplay: true,
		    autoplaySpeed: 6000,
		    prevArrow: '<div class="carousel_arrow prev"><img src="/wp-content/themes/driven/img/icons/icon-arrow-previous.svg" alt="Previous slide"></div>',
		    nextArrow: '<div class="carousel_arrow next"><img src="/wp-content/themes/driven/img/icons/icon-arrow-next.svg" alt="Next slide"></div>',
		    fade: true,
		    speed: 1000
		});
	}

	$(".case_study_carousel_row").mousemove(function(e) {
	  parallaxIt(e, ".image", -20);
	});

	function parallaxIt(e, target, movement) {
	  var $this = $(".case_study_slide .image_wrapper");
	  var relX = e.pageX - $this.offset().left;
	  var relY = e.pageY - $this.offset().top;

	  var xMov = (relX - $this.width() / 2) / $this.width() * movement;
	  var yMov = (relY - $this.height() / 2) / $this.height() * movement;

	  if(xMov < 25 && xMov > -25 && yMov < 25 && yMov > -25){
		  TweenMax.to(target, 1, {
		    x: xMov,
		    y: yMov
		  });
	  }
	}

});
