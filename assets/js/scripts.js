document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('#hamburger');
    const menu = document.querySelector('.offcanvas');

    menuButton.addEventListener('click', function () {
        menu.classList.toggle('open');
        menuButton.classList.toggle('open');
    });
});
