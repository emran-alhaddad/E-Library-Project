<?php

require_once("App/System/System.php");

abstract class Controller
{
    
    public static function getView($view,...$args)
    {
        System::render($view,$args);
    }

}

?>