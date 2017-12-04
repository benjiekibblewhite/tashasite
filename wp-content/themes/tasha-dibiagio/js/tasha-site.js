//Allows us to use $ for jQuery functions 
var $ = jQuery.noConflict();

jQuery(document).ready(function($) {
    $('.portfolio-info-section_title').click(function() {
        const textToShow = $(this).siblings();
        $('.portfolio-info-section_text').not(textToShow).slideUp(100);
        $(textToShow).slideToggle(100);
    });

    $('#portfolio-images-slider').bxSlider({
        auto: true,
        autoControls: true,
        stopAutoOnClick: true,
        mode: 'vertical',
        pager: true,
    });

});
