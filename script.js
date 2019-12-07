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