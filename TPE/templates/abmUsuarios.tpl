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
    <script src="js/usuarios.js">
    </script>
    <div class="edit_popup hidden" id="popup">
        {include file="popupUsuarios.tpl"}
    </div>
    <div class="contains-fluid contactanos">
        <div>
            <a href="dashboard">
                <button class="btn btn-primary">
                    &#8592; Volver
                </button>
            </a>
        </div>
        <div class="form_center">
            <div>
                <div class="title-tpl">
                    <h3>Panel de Cartoneros</h3>
                    <button class="btn btn-primary" id="btn_add_user">
                        Agregar
                    </button>
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">DNI</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Vehiculo</th>
                                <th scope="col">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$usuario item=user}
                                {if $user->rol == "cartonero"}
                                    <tr>
                                        <td>{$user->dni}</td>
                                        <td>{$user->nombre}</td>
                                        <td>{$user->apellido}</td>
                                        <td>{$user->telefono}</td>
                                        <td>{$user->email}</td>
                                        <td>{$user->direccion}</td>
                                        <td>{$user->fecha_nacimiento}</td>
                                        <td>{if $user->clase_vehiculo == "a"}Carrito
                                        {else if $user->clase_vehiculo == "b"} Auto
                                            {else if $user->clase_vehiculo == "c"}Camioneta 
                                            {else} Camion 
                                            {/if}</td>
                                        <td>{$user->rol}</td>
                                        <td>
                                            <a href="deleteUser/{$user->dni}" id="deleteUser">
                                                <button class="btn btn-primary">
                                                    Eliminar
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary modify">
                                                Modificar
                                            </button>
                                        </td>

                                    </tr>
                                {/if}
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>