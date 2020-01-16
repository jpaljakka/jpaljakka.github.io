// Selection of objects
const toggleMenu = document.querySelector('.toggleMenu i');
const nav = document.querySelector('.nav');

// Defining a function
 function toggleNav() {
    toggleMenu.classList.toggle('fa-bars');
    toggleMenu.classList.toggle('fa-times');
    nav.classList.toggle('nav-active');
} 

// Calling the function after click event occurs
toggleMenu.addEventListener('click', function() {
    toggleNav();
}); 


