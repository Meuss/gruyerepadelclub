document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('#hamburger');
    const menu = document.querySelector('.offcanvas');

    menuButton.addEventListener('click', function () {
        menu.classList.toggle('open');
        menuButton.classList.toggle('open');
    });

    // Close the menu when clicking escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            menu.classList.remove('open');
            menuButton.classList.remove('open');
        }
    });
});
