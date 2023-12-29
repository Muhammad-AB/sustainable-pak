document.addEventListener('DOMContentLoaded', function () {
    var menuBtn = document.getElementById('menu-btn');
    var mainNav = document.getElementById('main-nav');

    menuBtn.addEventListener('click', function () {
        mainNav.classList.toggle('show');
    });
});
