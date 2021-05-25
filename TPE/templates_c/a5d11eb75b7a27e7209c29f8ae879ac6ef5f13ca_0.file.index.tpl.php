<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 00:22:31
  from 'C:\xampp1\htdocs\grupo3metodologias\TPE\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ac2727bd71f8_72916273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d11eb75b7a27e7209c29f8ae879ac6ef5f13ca' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\grupo3metodologias\\TPE\\templates\\index.tpl',
      1 => 1621894945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ac2727bd71f8_72916273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <a href="#" class='btnLogin'>Iniciar Sesion</a>
        </div>
        <div class='header__bot'>
            <ul>
                <li><a href='#'>Servicio</a></li>
                <li><a href='materiales'>Cartelera</a></li>
                <li><a href='#'>Trabaja Con Nosotros</a></li>
                <li><a href='formPedido'>Contactanos</a></li>
                <li><a href='#'>Voluntarios</a></li>
            </ul>
        </div>
    </header>
    <div class="banner">
        <div class="banner__text">
            <h3>Servicio Metodologia Grupo 3</h3>
            <p id='pagina'>Trabaja con Nosotros</p>
        </div>
    </div>

    <div class='d-none popup'>
        <div class="login">
            <h3>Iniciar Sesion</h3>
            <input type="text" classs='login__user' placeholder='User o Email'>
            <input type="password" class='login__password' placeholder='Password'>
            <p><a href='#'>Olvidaste tu contrasena?</a></p>
            <div class='btn login__sesion'> Iniciar Sesion</div>
            <div class='login__barra'></div>
            <div class='btn login_register'> Registrarse</div>
        </div>
    </div>

    <div class='container'>
    </div>

    <?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
