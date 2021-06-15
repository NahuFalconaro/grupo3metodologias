<?php

require_once "model/PedidoModel.php";   
require_once "UserController.php";
require_once  "Controller.php";
class IndexController  extends Controller
{

    private $userController;


    function __construct()
    {   
        $this->view = new View();
        $this->userController = new UserController();
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
