<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/formulario.css">
    <title>Document</title>
</head>

<body>

    <div>
        <a href="dashboard">
            <button class="btn btn-primary">
                &#8592; Volver
            </button>
        </a>
    </div>


<div class="contains-fluid materiales">
    <div class="tabla-materiales ">
        <div class="row">
            <div class="title-tpl">
                <h3>Vista de direcciones indexadas en sistema.</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Dirección </th>
                        <th scope="col"> Clase de vehículo requerido </th>
                        <th scope="col"> Horario </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$Pedidos item=pedido}
                        <tr>
                            <td>{$pedido->ubicacion}</td>
                            {if $pedido->clase_vehiculo eq "a"}
                                <td>Carrito (a)</td>
                            {elseif $pedido->clase_vehiculo eq "b"}
                                <td>Auto (b)</td>
                            {elseif $pedido->clase_vehiculo eq "c"}
                                <td>Camioneta (c)</td>
                            {else}
                                <td>Camión (d)</td>
                            {/if}
                            <td>{$pedido->franja_horaria}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>

<body>
