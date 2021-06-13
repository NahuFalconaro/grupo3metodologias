<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/formulario.css">
    <title>Balanza</title>
</head>

<body>
    <div class="contains">
        <div class="row">
            <div class="row justify-content-end">
                <form class="col-4">
                    <div class="col-8 col-balanza">
                        <label for="formGroupExampleInput" class="form-label">Usuario:</label>
                        <select name="rol" id="" class="form-select">
                            <option value="0">Vecino Buena honda</option>
                            <option value="1">Cartonero</option>
                        </select>
                    </div>
                    <div class="col-8 col-balanza">
                        <label for="formGroupExampleInput" class="form-label">Seleccionar material:</label>
                        <select name="rol" id="" class="form-select">
                            {foreach from=$Materiales item=Material}
                                    <option value="{$Material->id_materiales}">{$Material->nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-8 col-balanza">
                        <label for="formGroupExampleInput" class="form-label">Peso del material:</label>
                        <input type="number" class="form-control" placeholder="Peso Material">
                    </div>
                    <div class="col-8 col-balanza">
                        <label for="formGroupExampleInput" class="form-label">Id Cartonero:</label>
                        <input type="number" class="form-control" placeholder="IdCartonero">
                    </div>
                    <div class="d-grid gap-2 col-2">
                        <button class="btn btn-primary" type="submit"> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>