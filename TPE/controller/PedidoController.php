<?php

require_once "./model/PedidoModel.php";
require_once "./view/View.php";

class PedidoController
{


    private $pedidoModel;
    private $view;


    function __construct()
    {
        $pedidoModel = new PedidoModel();
        $this->view = new View();
    }

    //$params = lo que te tre el router despues de la "/"
    //$params = null

    function agregarPedido()
    {
        $this->pedidoModel->addPedido($_POST["nombre"], $_POST["apellido"], $_POST["telefono"], $_POST["franja_horaria"], $_POST["clase_vehiculo"], $_POST["direccion"]);
    }
}
