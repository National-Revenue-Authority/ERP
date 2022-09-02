    const moreOfficesBtn = document.querySelector('.more-offices-btn');
    const offices = document.querySelector('.offices');

    moreOfficesBtn.addEventListener('click', (e) => {
        offices.classList.toggle('show-more');
    })