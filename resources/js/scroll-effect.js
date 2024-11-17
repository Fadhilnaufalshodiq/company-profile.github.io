// scroll-effect.js
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    var footer = document.querySelector('footer');

    // Add or remove 'scrolled' class based on scroll position
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        footer.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
        footer.classList.remove('scrolled');
    }
});
