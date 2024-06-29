document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.getElementById('nav-toggle');
    const navList = document.getElementById('nav__list');
    const navLinks = document.querySelectorAll('#nav__list a');

    navToggle.addEventListener('click', function() {
        navList.classList.toggle('active');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navList.classList.remove('active');
        });
    });
});