<?php

require_once "libs/smarty/Smarty.class.php";

class View
{

    function __construct(){
    }

    function ShowHome()
    {
        $smarty = new Smarty();
        $smarty->assign('Titulo', 'Grupo 3 Metodologias');
        $smarty->display('templates/index.tpl');
    }

    function Form(){
        $smarty = new Smarty();
        $smarty->display('templates/formPedido.tpl');
    }
}
