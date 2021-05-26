'use strict'
let display = document.querySelector('.popup');
let btnLogin = document.querySelector('.btnLogin');

let dis = false;

btnLogin.addEventListener('click', () => {
   if(dis){
       display.classList.remove('d-flex');
       display.classList.add('d-none');
       dis = false;
   }else{
        display.classList.remove('d-none');
       display.classList.add('d-flex');
       dis = true;
   }
});


