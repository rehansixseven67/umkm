const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.getElementById('customer-nav-links');

if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', String(isOpen));
    });
}