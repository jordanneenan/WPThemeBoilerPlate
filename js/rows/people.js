$(document).ready(function(){
	if($('.people').length){

		//give each item a row number
		rowNumbers();

		//add a last class to the last person
		$('.person:last-child').addClass('last');

		$('.person a').click(function(event){
			event.preventDefault();

			if(!$(this).hasClass('active')){
				$('.person a').removeClass('active');
				$(this).addClass('active');
				var parent = $(this).parent();
				openPerson(parent);
			}else{
				$(this).removeClass('active');
				closeInfoRow();
			}

			
		});

		$('div').on("click", '.close-row', function(){
			$('.person a').removeClass('active');
			closeInfoRow();
		});

		$('img.duotone').duotone({
			gradientMap: '#756f6A 30%, #e7e2dd 93%'
		});
	}
});

function rowNumbers(){ 
	var rowNumber = 1;
	$('.person').each(function(){
		var thisOffset = $(this).offset();

		if($(this).next().length){
			var nextOffset = $(this).next().offset();
			$(this).attr('data-row-number', rowNumber);

			if(thisOffset.top !== nextOffset.top){
				rowNumber++;
			}
		}else{
			$(this).attr('data-row-number', rowNumber);
		}
	});
}

function resetRowNumbers(){
	$('.person').each(function(){
		$(this).attr('data-row-number', '');
	});
}

function openPerson(personObj){

	//get the offset of the last item
	var lastOffset = $('.person.last').offset();

	//get the offset of the clicked item
	var objOffset = personObj.offset();

	//check if the info row alread exists
	if($('.info-row').length){
		//get the row number of the clicked item
		var rowNumber = personObj.attr('data-row-number');
		var infoPos   = $('.info-row').attr('data-under-row');

		//check if the info row is in the right place
		if(rowNumber == infoPos){
			//change the content of the row
			changeInfo(personObj);

		//if the row isn't in the right place, destroy it. We will rebuild.
		}else{
			deleteInfo();
			//run the whole script again to recalculate and rebuild
			openPerson(personObj);
		}

	//if it doesn't already exist, create it in the right place
	}else{

		//check if the item is in the last row
		if(objOffset.top == lastOffset.top){
			createInfo($('.person.last'));

		//otherwise we're not on the last row
		}else{
			var i = 1;
			var personNumber = personObj.attr('data-person-number');
			//loop through all person objects and check the offset top against the clicked item. Stop when it changes. Insert the info row before the item it changed on
			$('.person').each(function(){
				//needs to only start the loop from the one you clicked on
				if(i >= personNumber){
					var loopOffset = $(this).offset();
					if(objOffset.top !== loopOffset.top){
						var obj = $(this).prev();
						//create the row
						createInfo(obj);

						//stop the loop
						return false;	
					}
				}
				i++;
				
			});
		}

		//insert the content into the created row
		insertContent(personObj);

		//run the animation to open it
		openInfoRow();
	}
}

function createInfo(element){
	var rowValue = element.attr('data-row-number');
	var infoWrapper = '<div class="info-row" data-under-row="'+rowValue+'"><div class="content"></div></div>';
	$(element).after(infoWrapper);
}

function insertContent(element){
	var infoContent = '<div class="close-row"></div>';
	infoContent += '<div class="image">';
	infoContent += element.find('.headshot_alternate').html();
	infoContent += '</div>';
	infoContent += '<div class="copy cfx">';
	infoContent += '<div class="left">';
	infoContent += '<div class="name">'+element.find('.info .name').html()+'</div>';
	infoContent += '<div class="position">'+element.find('.info .position').html()+'</div>';
	infoContent += '</div>';
	infoContent += '<div class="right">';
	infoContent += '<div class="bio">'+element.find('.info .bio').html()+'</div>';
	infoContent += '</div>';
	infoContent += '</div>';

	$('.info-row .content').html('');
	$('.info-row .content').html(infoContent);
}

function deleteInfo(){
	$('.info-row').remove();
}

//animate the row
function openInfoRow(){
	new TimelineMax();
	tl = new TimelineMax();

	tl.set('.info-row', {height: "auto"}, 0)
	  .from('.info-row', 0.5, {height: 0}, 0)
	  .to('.info-row .content', 0.5, {opacity: 1}, 0.5)

	  $('.info-row').addClass('open');
}

function changeInfo(element){
	new TimelineMax();
	tl = new TimelineMax();

	tl.to('.info-row .content', 0.3, {opacity: 0}, 0)
	  .call(insertContent, [element])
	  .to('.info-row .content', 0.3, {opacity: 1}, 0.6)
}

function closeInfoRow(){
	new TimelineMax();
	tl = new TimelineMax();

	tl.to('.info-row .content', 0.3, {opacity: 0}, 0)
	  .to('.info-row', 0.5, {height: 0}, 0)
	  .call(deleteInfo)
}

//delete the info row if the screen is resized
var ir_rtime;
var ir_timeout = false;
var ir_delta = 400;

function ir_resizeend() {
    if (new Date() - ir_rtime < ir_delta) {
        setTimeout(ir_resizeend, ir_delta);
    } else {
        ir_timeout = false;

        rowNumbers();
        
        w = $( window ).width();
    }               
}

$(window).resize(function() {
	if($('.people').length){
    	if( w !== $( window ).width() ){

	        ir_rtime = new Date();
	        if (ir_timeout === false) {
	            ir_timeout = true;
	            setTimeout(ir_resizeend, ir_delta);
	            
	            	deleteInfo();
	            	$('.person a').removeClass('active');
	            	resetRowNumbers();

	        	}
        }

    }

});
