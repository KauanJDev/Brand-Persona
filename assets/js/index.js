
document.addEventListener('DOMContentLoaded', function() {
const nav = document.getElementById("nav");
let navTop = nav.offsetTop;


function fixedNav() {
  if (window.scrollY > navTop) {    
    nav.classList.add('fixed');
  }
   else {
    nav.classList.remove('fixed');    
  }
}

window.addEventListener('scroll', fixedNav);
})

function menuShow() {
  let menuMobile = document.querySelector('.menu-mobile');
  if (menuMobile.classList.contains('open')) {
      menuMobile.classList.remove('open');
      document.querySelector('.icon').src = "http://brandpersona.test/wp-content/themes/nautilus/assets/img/menu_white_36dp.svg";
  } else {
      document.querySelector('.icon').src = "http://brandpersona.test/wp-content/themes/nautilus/assets/img/close_white_36dp.svg";
      menuMobile.classList.add('open');
      nav.classList.add('fixed');

  }
}



