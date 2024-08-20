const menuToggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');
const menuClose = document.querySelector('.menu-close');

menuToggle.addEventListener('click', () => {sidebar.classList.toggle('active');});
menuClose.addEventListener('click', () => {sidebar.classList.remove('active')});