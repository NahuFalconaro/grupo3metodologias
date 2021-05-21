<?php
require_once 'controller/PedidoController.php';
require_once 'RouterClass.php';

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
//esto lo agrego para comparar
$r = new Router();

// rutas


$r->addRoute("agregarPedido", "POST", "PedidoController", "agregarPedido");
$r->addRoute("pedidos", "GET", "PedidoController", "formPedido");






//Rutas de ejemplo 


// $r->addRoute("home", "GET", "GalleryController", "Home");
// $r->addRoute("about", "GET", "GalleryController", "About");
// $r->addRoute("contact", "GET", "GalleryController", "Contact");

// //parte del registro y login
// $r->addRoute("register", "POST", "LoginController", "Register");
// $r->addRoute("loginscreen", "GET", "LoginController", "Login");


// //all about that ABM
// $r->addRoute("abm", "GET", "GalleryController", "ABM");

// $r->addRoute("artworkabm", "GET", "GalleryController", "ArtworkABM");
// $r->addRoute("addartwork", "POST", "GalleryController", "AddArtworkToDB");


// $r->addRoute("addediteduser/:ID", "POST", "GalleryController", "AddEditedUser");
// $r->addRoute("addeditedartwork/:ID", "POST", "GalleryController", "AddEditedArtwork");
// $r->addRoute("addeditedcategory/:ID", "POST", "GalleryController", "AddEditedCategory");


//Ruta por defecto.
$r->setDefaultRoute("pedidoController", "formPedido"); //tendria que haber un indexController y que el metodo se llame index o home

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
