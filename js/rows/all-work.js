$(document).ready(function(){

	if($('.filtr-container').length){
		$('.all_work').imagesLoaded( function() {

			var filterizd = $('.filtr-container').filterizr({
				animationDuration: 0.4,
				setupControls: true
			});

			$('.filter li').click(function(){
				$('.filter li').removeClass('active');
				$(this).addClass('active');
			});

		});

		$('img.duotone').duotone({
			gradientMap: '#756f6A 30%, #e7e2dd 93%'
		});
	}

});
