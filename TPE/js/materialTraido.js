'use strict';

//Estas funciones pueden remplazarse tambien con el atributo min='9' en el input html
//ambas se complementan


const inputCartonero = document.getElementById('id_cartonero');
const inputPeso = document.getElementById('peso');

//Validity.valid
//valida que el input sea mayor al especificado por el atributo min. Si no, se vuelve 0
//"si el valor es menor que el mínimo especificado por el atributo min".

const check = () => {
  if (!inputCartonero.validity.valid) inputCartonero.value = 0;     //estos dos if, hacen lo mismo.
  //if (inputCartonero.value < 0) inputCartonero.value = 0;
};

inputCartonero.addEventListener('input', check);
inputCartonero.addEventListener('blur', check);

const checkPeso = () => {
    if (!inputPeso.validity.valid) inputPeso.value = 0;
    //if (inputPeso.value < 0) inputPeso.value = 0;
  };

inputPeso.addEventListener('input', checkPeso);
//El inputevento se dispara cada vez que value cambia el elemento. 
//Esto es diferente al change evento, que solo se activa cuando se confirma el valor,
//como presionar la tecla Intro, seleccionar un valor de una lista de opciones,
inputPeso.addEventListener('blur', checkPeso);
//The onblur event occurs when an object loses focus
//The onblur event is most often used with form validation code (e.g. when the user leaves a form field).
//The onblur event is similar to the onfocusout event. The main difference is that the onblur event does not bubble