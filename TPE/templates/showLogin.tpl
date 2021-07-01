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
    <div class="contains-fluid contactanos">
        <div class="form_center">
            <div>
                <div class="title-tpl">
                    <h3>Login</h3>
                </div>
                <div>
                    <form enctype="multipart/form-data" action="verifyUser" method="post">

                        <input type="text" class="form-control" name="dni" placeholder="DNI" required>


                        <input type="password" class="form-control" name="password" placeholder="Contraseña"
                            required>

                        <div class="button_container">
                            <button class="btn btn-primary" type="submit"> Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>