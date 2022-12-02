var menu = document.querySelector('#header-menu');
var burguer = document.querySelector('.hamburguer');
var menuBtn = document.getElementsByClassName('menu-btn');

burguer.addEventListener("click", e=>{ 
    if(menuBtn[1].classList.contains('hidden')){
        menu.style.transform = "translateY(100%)";
    }else if(menuBtn[0].classList.contains('hidden')){
        menu.style.transform = "translateY(-100%)";
    }
    menuBtn[0].classList.toggle('hidden');
    menuBtn[1].classList.toggle('hidden');
})