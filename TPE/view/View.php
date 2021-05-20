<?php

require_once "./libs/smarty/Smarty.class.php";

class View
{

    function __construct()
    {
    }

    function ShowHome()
    {
        $smarty = new Smarty();
        $smarty->display('templates/recent.tpl');
    }
}
