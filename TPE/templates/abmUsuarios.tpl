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
                                <th scope="col">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            {* {foreach from=$usuarios item=usuario} *}
                                <tr>
                                    <td>{$usuario->dni}</td>
                                    <td>{$usuario->nombre}</td>
                                    <td>{$usuario->rol}</td>
                                    <td>
                                        <a href="deleteUser/{$usuario->dni}">
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
                            {* {/foreach} *}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>