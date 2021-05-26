<?php

require_once "libs/smarty/Smarty.class.php";

class View{

    function __construct(){
    }

    function ShowHome($logged){
        $smarty = new Smarty();
        $smarty->assign('Logged', $logged);
        $smarty->assign('Titulo', 'Grupo 3 Metodologias');
        $smarty->display('templates/index.tpl');
    }

    function ShowLogin(){
        $smarty = new Smarty();
        $smarty->display('templates/ShowLogin.tpl');
    }

    function ShowHomeLogged(){
        $smarty = new Smarty();
        $smarty->display('templates/ShowHomeLogged.tpl');
    }

    function ShowErrorPass(){
        $smarty = new Smarty();
        $smarty->display('templates/ShowErrorPass.tpl');
    }

    function ShowErrorEmptyFields(){
        $smarty = new Smarty();
        $smarty->display('templates/ShowErrorEmptyFields.tpl');
    }

    function Form($logged){
        $smarty = new Smarty();
        $smarty->assign('Logged', $logged);
        $smarty->display('templates/formPedido.tpl');
    }

    function ShowMateriales($Materiales, $logged){
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Materiales);
        $smarty->assign('Logged', $logged);
        $smarty->display('templates/materiales.tpl');
    }
    function showError(){//muestra error al insertar o updatear un material y no existe el material o hay campos vacios
        $smarty = new Smarty();
        $smarty->display('templates/showErrorMaterial.tpl');
    }

    function showUpdateMaterial($Material){
        $smarty = new Smarty();
        $smarty->assign('Materiales', $Material);
        $smarty->display('templates/updateMaterial.tpl');
    }
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."materiales");
     }

}


?>