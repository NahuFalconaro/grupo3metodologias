'use strict'
let display = document.querySelector('.popup');
let btnLogin = document.querySelector('.btnLogin');
let btn_close = document.querySelector("#session_btn_close");

btnLogin.addEventListener('click', () => {
    display.classList.toggle('d-flex');
    display.classList.toggle('d-none');
});

btn_close.addEventListener('click', () => {
    display.classList.toggle('d-flex');
    display.classList.toggle('d-none');
});


