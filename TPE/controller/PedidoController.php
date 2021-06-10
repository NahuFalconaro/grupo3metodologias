<?php

require_once "./model/PedidoModel.php";
require_once "./view/View.php";

class PedidoController
{


    private $pedidoModel;
    private $view;


    function __construct()
    {
        $this->pedidoModel = new PedidoModel();
        $this->view = new View();
        define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/home');
    }

    //Comprueba y manda al Model el pedido, luego redirecciona al Home
    function agregarPedido()
    {
        $imagen = null;
        if (isset($_FILES)) {

            if ($_FILES['foto']['type'] == "image/jpg" ||  $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png") {
                //si la imagen tiene el formato aceptado, guardo 2 cosas en un array para pasarle al model:

                //1) la ubicacion de la imagen cuando recien está subida y está en formato .temp ("fileTemp").

                //2) el lugar donde quiero guardar la imagen. consiste de: la carpeta donde la quiero guardar,
                // un nombre unico (uniqid) y la extension de la imagen. agrupo todo esto en un string.

                $imagen["fileTemp"] = $_FILES['foto']['tmp_name'];
                $imagen["filePath"] = "images/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
            };
        }
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $ubicacion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $claseVehiculo = $_POST["clase_vehiculo"];
        $franjaHoraria = $_POST["franja_horaria"];

        $this->pedidoModel->addPedido($nombre, $apellido, $ubicacion, $telefono, $imagen, $claseVehiculo, $franjaHoraria);
        header("Location: " . BASE_FORM_PEDIDO);
    }
}
