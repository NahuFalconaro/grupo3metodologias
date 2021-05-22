'use strict'

$(document).ready(function() {
    navigate('http://localhost/grupo3metodologias/tpe/formpedido');
  });

function navigate(url) {
    $.get(url, function (data) {
        $('.main-content').html(data);
    });
}

//falta arreglar porque no anda
 function savePedido(form, event){
     event.preventDefault();

     var form_data = new FormData(form);

     $.ajax({
         type: "POST",
         url: 'http://localhost/grupo3metodologias/tpe/', //corregir url ? talves ese es el porque del error -> Uncaught SyntaxError: Unexpected token '<'
         contentType: false,
         processData: false,
         data: form_data,
         success: function(res){
             console.log(JSON.parse(res));
             res = JSON.parse(res);

         },
         error : function(err){
             console.error(err);
         }
     });
 }