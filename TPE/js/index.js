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
         url: 'http://localhost/grupo3metodologias/tpe/',
         contentType: false,
         processData: false,
         data: form_data,
         type: "POST",
         success: function(res){
             console.log(JSON.parse(res));
             res = JSON.parse(res);

         },
         error : function(err){
             console.error(err);
         }
     });
 }