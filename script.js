// toggle menu icon navbar
let menuIcon = document.querySelector('#menu');
let rightnav = document.querySelector('.rightnav');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    rightnav.classList.toggle('active');
};

// scroll reveal
ScrollReveal({
    reset: false,
    distance: '80px',
    duration: 2000,
    delay: 200
});
ScrollReveal().reveal('.leftdiv, .heading', { origin: 'top' });
ScrollReveal().reveal('.rightdiv, .box, form', { origin: 'bottom' });
ScrollReveal().reveal('.about .img', { origin: 'left' });

//about me read more button
const parentContainer = document.querySelector('.container');
parentContainer.addEventListener('click', event => {
    const current = event.target;
    const isReadmorebtn = current.className.includes('readmorebtn');
    if (!isReadmorebtn) return;
    const currentText = event.target.parentNode.querySelector('.read-more');
    currentText.classList.toggle('read-more--show');
    current.textContent = current.textContent.includes('Read More') ? "Read Less" : "Read More";
})

//Contact me