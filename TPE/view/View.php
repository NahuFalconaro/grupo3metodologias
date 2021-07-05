<?php

require_once "libs/smarty/Smarty.class.php";

class View
{

    function __construct()
    {
    }

    //muestra el home
    function ShowHome()
    {
        $smarty = new Smarty();
        $smarty->assign('Titulo', 'Grupo 3 Metodologias');
        $smarty->display('templates/home.tpl');
    }

    //popup del login
    function ShowLogin()
    {
        $smarty = new Smarty();
        $smarty->display('templates/showLogin.tpl');
    }

    //Muestra todos los recorridos
    function verDirecciones($pedidos)
    {
        $smarty = new Smarty();
        $smarty->assign('Pedidos', $pedidos);
        $smarty->display('templates/direcciones.tpl');
    }

    //muesta el formulario de la balanza y todos los materiales recolectados con su peso
    function showBalanza($Materiales){
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Materiales);
        $smarty->display('templates/balanza.tpl');
    }


    function verRecorridos($lista){
        $smarty = new Smarty();
        $smarty->assign('lista', $lista);
        $smarty->display('templates/recorridos.tpl');
    }

    //muestra el formulario de contacto
    function Form()
    {
        $smarty = new Smarty();
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
    function ShowCarteleraAdmin($Materiales)
    {
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Materiales);
 //       $smarty->assign('Logged', $logged);
        $smarty->display('templates/materiales.tpl');
    }
    //muestra error al insertar o updatear un material y no existe el material o hay campos vacios
    function showError()
    {
        $smarty = new Smarty();
        $smarty->display('templates/showErrorMaterial.tpl');
    }

    function showDashboard(){
        $smarty = new Smarty();
        $smarty->display('templates/dashboard.tpl');
    }

    //popup del update
    function showUpdateMaterial($Material)
    {
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Material);
        $smarty->display('templates/updateMaterial.tpl');
    }

    function showAbmUsuarios($users){
        $smarty = new Smarty();
        $smarty->assign('usuario', $users);
        $smarty->display('templates/abmUsuarios.tpl');
    }
    //muestra los materiale traidos por los cartoneros
    function listarMaterialesPorCartoneros($Materiales)
    {
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Materiales);
        $smarty->display('templates/listaMaterialesAcopiados.tpl');
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

    function ShowDashboardLocation(){
        header("Location: " . BASE_URL . "dashboard");
    }

    function ShowUsersLocation(){
        header("Location: " . BASE_URL . "showUsuarios");
    }
}
