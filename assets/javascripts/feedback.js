document.querySelector('#question1').focus()

var menu = document.querySelector('#header-menu');
var burguer = document.querySelector('.hamburguer');
var menuBtn = document.getElementsByClassName('menu-btn');

burguer.addEventListener("click", e=>{ 
    if(menuBtn[1].classList.contains('hidden')){
        menu.style.transform = "translateY(100%)";
        document.querySelector('.range-label').style.display ="none"
    }else if(menuBtn[0].classList.contains('hidden')){
        menu.style.transform = "translateY(-100%)";
        document.querySelector('.range-label').style.display ="block"
    }
    menuBtn[0].classList.toggle('hidden');
    menuBtn[1].classList.toggle('hidden');
})