const dropdownMenu = document.querySelector('.dropdown-menu-item');
const dropdownItem = document.querySelector('.dropdown-nav-menu');

dropdownMenu.addEventListener('click', function () {
    dropdownItem.classList.toggle('hidden-nav');
});