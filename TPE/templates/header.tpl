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
    <header>
        <div class='header__top'>
            <h1>Servicio Metodologia Grupo 3</h1>
            {if $Logged == 0}
            <a href="#" class='btnLogin'>Iniciar Sesion</a>
            {else}
                <a href="logout" class="btnLogin">logout</a>
            {/if}
        </div>
        <div class='header__bot'>
            <ul>
                <li><a href='home'>Inicio</a></li>
                <li><a href='materiales'>Cartelera</a></li>
                <li><a href=''>Trabaja Con Nosotros</a></li>
                <li><a href='formPedido'>Contactanos</a></li>
                <li><a href=''>Voluntarios</a></li>
            </ul>
        </div>
    </header>

    {if $Logged == 0}
    <div class='d-none popup'>
        <form action="verifyUser" method="POST" class="form-inline">
            <div class="login">
                <h3 >Iniciar Sesion</h3>
                <input type="text" classs='login__user' name="user" placeholder='User o Email'>
                <input type="password" class='login__password' name="pass" placeholder='Password'>
                <p><a href='#'>Olvidaste tu contrasena?</a></p>
                <button type="submit" class="btn">Iniciar Sesion</button>
                <button type="button" id="session_btn_close" class="btn">Cancelar</button>
                <div class='login__barra'></div>
            </div>
        </form>
    </div>
    {/if}
    <script src="js/index.js"></script>
</body>

</html>