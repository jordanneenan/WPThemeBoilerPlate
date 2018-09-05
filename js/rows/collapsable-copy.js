$(document).ready(function(){

	collapsableCopy();

	$('.collapsable_toggle').click(function(){
		var $parent = $(this).prev();
		var $gradient = $(this).prev().find('.collapsable_copy_gradient');

		var expandedHeight = $parent.attr('data-height');
		var collapsedHeight = 200;

		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			$gradient.addClass('active')
			$parent.css('height', expandedHeight);
		}else{
			$(this).removeClass('active');
			$gradient.removeClass('active');
			$parent.css('height', collapsedHeight);
		}
	});
});

var collapsableCopy = function(){
	$('.collapsable_copy_gradient').each(function(){
		var $parent = $(this).parent();
		var $copyBox= $(this).next();
		var expandedHeight = $copyBox.outerHeight()+30;
		var collapsedHeight = 200;
		$parent.attr('data-height', expandedHeight);
		$parent.attr('data-colheight', collapsedHeight);

		if($(this).hasClass('active')){
			$parent.css('height', expandedHeight);
		}
	});
}

var cc_rtime;
var cc_timeout = false;
var cc_delta = 200;
$(window).resize(function() {
    cc_rtime = new Date();
    if (cc_timeout === false) {
        cc_timeout = true;
        setTimeout(cc_resizeend, cc_delta);

        console.log('resizing');

        $('.collapsable_copy_container').css('height', 'auto');

    }
});

function cc_resizeend() {
    if (new Date() - cc_rtime < cc_delta) {
        setTimeout(cc_resizeend, cc_delta);
    } else {
        cc_timeout = false;

        if($('.collapsable_toggle').length){collapsableCopy();}
    }               
}
