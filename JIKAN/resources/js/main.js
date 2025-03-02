
// navbar allo scroll
window.addEventListener('scroll', function () {
    let navbar = document.getElementById('mainNav');
    if (window.scrollY > 50) {
        navbar.classList.add('shrink', 'navbar-dark');
        navbar.classList.remove('navbar-light', 'bg-trasparent');
    } else {
        navbar.classList.remove('shrink', 'navbar-dark');
        navbar.classList.add('navbar-light', 'bg-trasparent');
    }
});

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 500,
    easing: 'ease-in-out',
    once: true
});


