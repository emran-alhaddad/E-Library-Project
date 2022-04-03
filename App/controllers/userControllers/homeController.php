<?php
namespace coding\app\controllers\userControllers;

use coding\app\controllers\Controller;
use coding\app\system\StaticPaths;

class HomeController extends Controller{

   public function show()
   {
       echo "Home";
       $this->view(StaticPaths::USER_VIEWS.'/Home');
   }
}
?>