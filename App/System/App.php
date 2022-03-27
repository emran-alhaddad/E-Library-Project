<?php
require_once("App/System/System.php");
require_once(System::SYSTEM."Router.php");
require_once(System::ROUTS."systemRoutes.php");
class Server{


    public function __construct()
    {
        if(isset($_GET['url']))
        {$url=explode('/',$_GET['url']);
        Router::use($url,function($link){SystemRoutes::show($link);});
        }
        else
        System::redirect('Home');
    }

}
