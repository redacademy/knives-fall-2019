// click the hamburger menu
const burger = document.getElementById('hamburger');

const mobileMenu = document.getElementsByClassName('mobile-menu')[0];
// closing menu 
const cross = document.getElementById('cross');

burger.addEventListener('click', function () {
    mobileMenu.classList.remove('hide');
});

cross.addEventListener('click', function () {
    mobileMenu.classList.add('hide');
});
// opens up & display menu items

//