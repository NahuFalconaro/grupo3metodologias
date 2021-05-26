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

    function formPedido()
    {
        $this->view->Form();
    }

    function home()
    {
        $logged = $this->userController->getAccess();
        $this->view->ShowHome($logged);
    }
}
