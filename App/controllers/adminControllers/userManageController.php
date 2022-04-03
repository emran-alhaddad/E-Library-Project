<?php
namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\system\StaticPaths;

class UserManageController extends Controller{

   public function show()
   {
       $this->view(StaticPaths::ADMIN_VIEWS.'/userManage');
   }
}
?>