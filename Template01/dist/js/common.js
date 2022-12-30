$(document).ready(function () {
    var button = document.querySelector('.menu-toggle');
    var menu = document.querySelector('nav');
    var open = document.querySelector('#open');
    var close = document.querySelector('#close');

    button.addEventListener('click', (e) => {
        menu.classList.toggle('hidden');
        open.classList.toggle('hidden');
        close.classList.toggle('hidden');
    });
});