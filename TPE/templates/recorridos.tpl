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
                    <h3>Vista de recorridos indexados en sistema.</h3>
                </div>
                {foreach from=$lista item=cartonero}
                    <h4>{$cartonero[1]}, DNI {$cartonero[0]}</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"> Dirección </th>
                                <th scope="col"> Clase de vehículo requerido </th>
                                <th scope="col"> Horario </th>
                            </tr>
                        </thead>
                        {foreach from=$cartonero[2] item=pedido}
                            <tbody>
                                <tr>
                                    <td>{$pedido->ubicacion}</td>
                                    {if $pedido->clase_vehiculo eq "a"}
                                        <td>Carrito</td>
                                    {elseif $pedido->clase_vehiculo eq "b"}
                                        <td>Auto</td>
                                    {elseif $pedido->clase_vehiculo eq "c"}
                                        <td>Camioneta</td>
                                    {else}
                                        <td>Camión</td>
                                    {/if}
                                    <td>{$pedido->franja_horaria}</td>
                                </tr>
                            </tbody>
                        {/foreach}
                    </table>
                {/foreach}
            </div>
        </div>
    </div>

    <body>