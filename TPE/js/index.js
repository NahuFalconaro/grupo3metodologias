'use strict'

$(document).ready(function() {
    navigate('http://localhost/grupo3metodologias/tpe/formpedido');
  });

function navigate(url) {
    $.get(url, function (data) {
        $('.main-content').html(data);
    });
}