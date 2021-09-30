const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('.row .left');

menuToggle.addEventListener('click',function(){
    nav.classList.toggle('slide')
});