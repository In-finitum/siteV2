$(document).ready(function () {
    $('.show_popup').click(function () {
        var popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).show();
        $('.overlay_popup').show();
        // document.body.style.overflow = 'hidden';
    });
    $('.fa-times').click(function () {
        $('.overlay_popup, .popup').hide();
        document.body.style.overflow = 'auto';
    });
});

$(document).ready(function() {
    $('.col_2').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });
});