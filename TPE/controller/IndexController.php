<?php

require_once "model/PedidoModel.php";   
require_once "UserController.php";
require_once "view/View.php";

class IndexController
{

    private $view;
    private $userController;


    function __construct()
    {   
        $this->userController = new UserController();
        $this->view = new View();
    }

    //se fija si esta logeado y llama a la view del formulario de contactanos
    function formPedido()
    {
        $logged = $this->userController->getAccess();
        $this->view->Form($logged);
    }

    //se fija si esta logeado y llama a la view del home
    function home()
    {
        $logged = $this->userController->getAccess();
        $this->view->ShowHome($logged);
    }
}
