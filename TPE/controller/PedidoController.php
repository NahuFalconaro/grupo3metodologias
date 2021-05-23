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
    }

    //$params = lo que te tre el router despues de la "/"
    //$params = null

    function agregarPedido()
    {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $ubicacion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $claseVehiculo = $_POST["clase_vehiculo"];
        $franjaHoraria = $_POST["franja_horaria"];

        $this->pedidoModel->addPedido($nombre, $apellido, $ubicacion, $telefono, $claseVehiculo, $franjaHoraria);
    }
}
