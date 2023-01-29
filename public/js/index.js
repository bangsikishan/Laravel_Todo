const hamburger = document.querySelector('#hamburger');
const links = document.querySelector('#links');

hamburger.addEventListener('click', () => {
    if (!links.classList.contains('active')) {
        links.classList.add('active');
    }
    else {
        links.classList.remove('active');
    }
});