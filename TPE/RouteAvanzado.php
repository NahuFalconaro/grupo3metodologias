<?php

require_once 'controller/PedidoController.php';
require_once "controller/MaterialController.php";
require_once "controller/MaterialTraidoController.php";
require_once 'RouterClass.php';

// CONSTANTES PARA RUTEO
define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("BASE_FORM_PEDIDO", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/formPedido');
define("BASE_BALANZA", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/balanza');
//esto lo agrego para comparar
$r = new Router();





//Ejemplo:
// addRoute("palabra en URL", "Método", "Controlador encargado", "Nombre de funcion")


// rutas
$r->addRoute("home", "GET", "MaterialController", "home");
$r->addRoute("formPedido", "GET", "PedidoController", "formPedido");
$r->addRoute("insertMaterial", "POST", "MaterialController", "insertMaterial");
$r->addRoute("deleteMaterial/:ID", "GET", "MaterialController", "deleteMaterial");
$r->addRoute("materiales", "GET", "MaterialController", "showMateriales");
$r->addRoute("adminMaterial", "GET", "MaterialController", "showMaterialesAdmin");
$r->addRoute("submitForm", "POST", "PedidoController", "agregarPedido");
$r->addRoute("loginscreen", "GET", "UserController", "Login");



$r->addRoute("verifyUser", "POST", "UserController", "verifyUser");
$r->addRoute("dashboard", "GET", "UserController", "showDashboard");

$r->addRoute("logout", "GET", "UserController", "Logout");
$r->addRoute("direcciones", "GET", "PedidoController", "verDirecciones");


$r->addRoute("showUsuarios", "GET", "UserController", "abmUsuarios");
$r->addRoute("modifyUser/:ID", "POST", "UserController", "modifyUser");
$r->addRoute("addUser", "POST", "UserController", "addUser");

$r->addRoute("deleteUser/:ID", "GET", "UserController", "deleteUser");

//Actual
$r->addRoute("recorridos", "GET", "PedidoController", "verRecorridos");



$r->addRoute("logout", "GET", "UserController", "Logout");

$r->addRoute("agregarpedido", "POST", "PedidoController", "formPedido");
$r->addRoute("pedidos", "GET", "PedidoController", "formPedido");

$r->addRoute("insertMaterialTraido", "POST", "MaterialTraidoController", "insertMaterialTraido");
$r->addRoute("balanza", "GET", "MaterialTraidoController", "getBalanza");//Ruta donde muestra los materiales traidos
$r->addRoute("materialesAcopiados", "GET", "MaterialTraidoController", "listarMaterialesPorCartoneros");

$r->addRoute("getEditMaterial/:ID", "GET", "MaterialController", "getEditMaterial");
$r->addRoute("updateMaterial/:ID", "POST", "MaterialController", "updateMaterial");

//balanza

//$r->addRoute("insertBalanza", "POST", "MaterialController", "agregarPesoMaterial");
//Rutas de ejemplo 

// $r->addRoute("about", "GET", "GalleryController", "About");
// $r->addRoute("contact", "GET", "GalleryController", "Contact");

// //parte del registro y login
// $r->addRoute("register", "POST", "LoginController", "Register");

//Ruta por defecto.
$r->setDefaultRoute("MaterialController", "home");

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>