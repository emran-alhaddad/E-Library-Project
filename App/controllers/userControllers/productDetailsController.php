<?php
namespace coding\app\controllers\userControllers;

use coding\app\controllers\Controller;
use coding\app\system\StaticPaths;

class ProductDetailsController extends Controller{

   public function show()
   {
       $this->view(StaticPaths::USER_VIEWS.'/Details');
       
   }
}
?>