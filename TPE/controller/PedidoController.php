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

    function agregarPedido(){

        
    }

    function formPedido(){
        $this->view->showHome();
    }

}
