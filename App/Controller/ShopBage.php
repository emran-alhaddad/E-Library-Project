<?php

require_once("App/System/System.php");
require_once(System::CONTROLLER."controller.php");



class ShopBage extends Controller
{
    public function show()
    {
        $this->getView(System::VIEW.__CLASS__.".php");
    }
}

?>