<?php

require_once "libs/smarty/Smarty.class.php";

class View
{

    function __construct()
    {
    }

    //muestra el home
    function ShowHome($logged)
    {
        $smarty = new Smarty();
        $smarty->assign('Logged', $logged);
        $smarty->assign('Titulo', 'Grupo 3 Metodologias');
        $smarty->display('templates/home.tpl');
    }

    //popup del login
    function ShowLogin()
    {
        $smarty = new Smarty();
        $smarty->display('templates/ShowLogin.tpl');
    }

    //Muestra todos los recorridos
    function showRecorridos($pedidos)
    {
        $smarty = new Smarty();
        $smarty->assign('Pedidos', $pedidos);
        $smarty->display('templates/verRecorridos.tpl');
    }


    //muestra el formulario de contacto
    function Form($logged)
    {
        $smarty = new Smarty();
        $smarty->assign('Logged', $logged);
        $smarty->display('templates/formPedido.tpl');
    }

    //muestra los materiales al publico sin opcion de edicion
    function ShowCarteleraPublica($Materiales)
    {
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Materiales);
        $smarty->display('templates/carteleraPublica.tpl');
    }
    //muestra los materiales al admin con opcion de edicion
    function ShowCarteleraAdmin($Materiales, $logged)
    {
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Materiales);
        $smarty->assign('Logged', $logged);
        $smarty->display('templates/materiales.tpl');
    }
    //muestra error al insertar o updatear un material y no existe el material o hay campos vacios
    function showError()
    {
        $smarty = new Smarty();
        $smarty->display('templates/showErrorMaterial.tpl');
    }

    //popup del update
    function showUpdateMaterial($Material)
    {
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Material);
        $smarty->display('templates/updateMaterial.tpl');
    }

    //redirige a materiales
    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "carteleraPublica");
    }
    function ShowAdminMateriales()
    {
        header("Location: " . BASE_URL . "adminMaterial");
    }
}
