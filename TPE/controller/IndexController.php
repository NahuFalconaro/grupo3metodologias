<?php

require_once "./model/PedidoModel.php";
require_once "./view/View.php";

class IndexController
{

    private $view;


    function __construct()
    {
        $this->view = new View();
    }

    function formPedido()
    {
        $this->view->Form();
    }

    function home()
    {
        $this->view->ShowHome();
    }
}
