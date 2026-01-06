// burger.js
document.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.burger');
    const navBar = document.querySelector('.nav-bar');

    if (burger && navBar) {
        burger.addEventListener('click', () => {
            navBar.classList.toggle('active');
        });
    }
});
