jQuery(document).ready(function($) {
    var js_openlightbox = $('#openlightbox');
    $('.js_dialog_openlightbox').click(function(e){
        js_openlightbox.removeClass('dialog-close').addClass('dialog-open');
    });
    js_openlightbox.find('.js_close').click(function(e){
        js_openlightbox.removeClass('dialog-open').addClass('dialog-close');
    });
});