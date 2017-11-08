const portfolioInfoSectionTitles = document.querySelectorAll('.portfolio-info-section_title');

portfolioInfoSectionTitles.forEach((title)=> {
    title.addEventListener('click', showSectionText);
})

function showSectionText(e) {
    const parent = this.parentNode;
    parent.classList.toggle('info-text_visible');
}


