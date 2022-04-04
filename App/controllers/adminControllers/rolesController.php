<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\Role;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;

class RolesController extends Controller
{
    public Role $role;

    public function __construct()
    {
        $this->role = new Role();
    }

    public function show()
    {
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $this->role->getAll(), 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $this->role->getAll()];

        $this->view(StaticPaths::ADMIN_VIEWS . '/roles', $args);
    }

    public function addNew()
    {

        $this->role->name = $_POST['name'];
        $this->role->created_by = 1;

        if ($this->role->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New Role Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add Role"];
        AppSystem::$appSystem->response->redirect("/admin/roles");
    }

    public function editItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->role->name = $sent_vars['name'];
        $this->role->created_by = 2;
        $this->role->updated_at = "".date("Y-m-d H:i:s", time());
        if ($this->role->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Role Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update Role !!!"];
        
          echo true;  
        
    }

    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->role->is_active = 0;
        $this->role->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->role->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Role Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete Role !!!"];
        
          echo true;  
        
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->role->is_active = 1;
        $this->role->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->role->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Role Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore Role !!!"];
        
          echo true;  
        
    }
}
