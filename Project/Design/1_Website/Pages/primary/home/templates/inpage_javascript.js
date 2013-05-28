$(document).ready(function() {
	$('.sliderNavigation').click(function(){
		if($(this).attr('id') == 'next')
			getNextImage();
		else
			getPrevImage();	
	});
	setInterval("getNextImage()", 8000);
});

function getNextImage() {
    var CurPhoto = $('#slider > div.active');
    var NxtPhoto = CurPhoto.next();
    if (NxtPhoto.length == 0)
        NxtPhoto = $('#slider > div:first');

    CurPhoto.removeClass('active').addClass('previous');
    NxtPhoto.css({ opacity: 0.0 }).addClass('active').animate({ opacity: 1.0 }, 1000,
        function() {
            CurPhoto.removeClass('previous');
        });
	}
function getPrevImage() {
    var CurPhoto = $('#slider > div.active');
    var PrevPhoto = CurPhoto.prev();
    if (PrevPhoto.length == 0)
    	PrevPhoto = $('#slider > div:last');

    CurPhoto.removeClass('active').addClass('previous');
    PrevPhoto.css({ opacity: 0.0 }).addClass('active').animate({ opacity: 1.0 }, 1000,
        function() {
            CurPhoto.removeClass('previous');
        });
	}
