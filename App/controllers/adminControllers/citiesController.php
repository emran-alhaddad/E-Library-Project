<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\City;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;
use DateTime;

class CitiesController extends Controller
{
    public City $city;

    public function __construct()
    {
        $this->city = new City();
    }

    public function show()
    {
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $this->city->getAll(), 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $this->city->getAll()];

        $this->view(StaticPaths::ADMIN_VIEWS . '/cities', $args);
    }

    public function addNew()
    {

        $this->city->name = $_POST['name'];
        $this->city->created_by = 1;

        if ($this->city->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New City Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add City"];
        AppSystem::$appSystem->response->redirect("/admin/cities");
    }

    public function editItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->city->name = $sent_vars['name'];
        $this->city->created_by = 2;
        $this->city->updated_at = "".date("Y-m-d H:i:s", time());
        if ($this->city->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "City Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update City !!!"];
        
          echo true;  
        
    }

    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->city->is_active = 0;
        $this->city->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->city->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "City Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete City !!!"];
        
          echo true;  
        
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->city->is_active = 1;
        $this->city->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->city->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "City Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore City !!!"];
        
          echo true;  
        
    }
}
