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

    <div class="contains-fluid">

        <div>
            <a href="dashboard">
                <button class="btn btn-primary">
                    &#8592; Volver
                </button>
            </a>
        </div>

        <div class="row">
            <div class="title-tpl">
                <h3>Materiales acopiados por cartoneros</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Cartonero </th>
                        <th scope="col"> Material </th>
                        <th scope="col"> Peso </th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$Materiales item=material}
                        <tr>
                            <td>{$material->cartonero}</td>
                            <td>{$material->material}</td>
                            <td>{$material->peso}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>