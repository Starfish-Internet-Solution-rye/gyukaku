$(document).ready(function() {
	setInterval("rotateImages()", 8000);
});

function rotateImages() {
    var CurPhoto = $('#slider div.active');
    var NxtPhoto = CurPhoto.next();
    if (NxtPhoto.length == 0)
        NxtPhoto = $('#slider div:first');

    CurPhoto.removeClass('active').addClass('previous');
    NxtPhoto.css({ opacity: 0.0 }).addClass('active').animate({ opacity: 1.0 }, 1000,
        function() {
            CurPhoto.removeClass('previous');
        });
	}
