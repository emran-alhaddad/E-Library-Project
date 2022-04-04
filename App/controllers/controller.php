<?php
namespace coding\app\controllers;

use coding\app\system\AppSystem;

class Controller{

   function view($viewName,$params=[]){
       AppSystem::$appSystem->router->view($viewName,$params);
   }

   

}
?>