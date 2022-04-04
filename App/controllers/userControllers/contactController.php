<?php
namespace coding\app\controllers\userControllers;

use coding\app\controllers\Controller;
use coding\app\system\StaticPaths;

class ContactController extends Controller{

   public function show()
   {
       $this->view(StaticPaths::USER_VIEWS.'/Contact');
       
   }
}
?>