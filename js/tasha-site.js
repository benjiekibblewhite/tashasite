$('.portfolio-info-section_title').click(function(){
    const textToShow = $(this).siblings();
    $('.portfolio-info-section_text').not(textToShow).slideUp(100);
   $(textToShow).slideToggle(100);
})

