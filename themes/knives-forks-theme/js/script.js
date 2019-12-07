// click the hamburger menu
const burger = document.getElementById('hamburger');
burger.addEventListener('click', function () {
    const mobileMenu = document.getElementsByClassName('mobile-menu')[0];
    mobileMenu.classList.remove('hide');
});
// opens up & display menu items

//