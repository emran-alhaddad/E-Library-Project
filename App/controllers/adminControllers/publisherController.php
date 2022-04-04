<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\Publisher;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;
use coding\app\system\SystemUtils;

class PublisherController extends Controller
{
    public Publisher $publisher;

    public function __construct()
    {
        $this->publisher = new Publisher();
    }

    public function show()
    {
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $this->publisher->getAll(), 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $this->publisher->getAll()];

        $this->view(StaticPaths::ADMIN_VIEWS . '/publishers', $args);
    }

    public function addNew()
    {

        $this->publisher->name = $_POST['name'];
        $this->publisher->phone = $_POST['phone'];
        $this->publisher->created_by = 1;
        $imageName = SystemUtils::uploadFile($_FILES['image'], StaticPaths::PUBLISHERS);
        $this->publisher->image = $imageName != null ? $imageName : "default.png";

        if ($this->publisher->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New Publisher Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add Publisher"];
        AppSystem::$appSystem->response->redirect("/admin/publisher");
    }

    public function editItem()
    {
        $this->publisher->name = $_POST['name'];
        $this->publisher->phone = $_POST['phone'];
        $this->publisher->created_by = 2;
        $this->publisher->updated_at = "".date("Y-m-d H:i:s", time());

        if(isset($_FILES['image']))
        {
            $oldImage = $this->publisher->getSingle("id=".$_POST['id'])[0]->image;
            $this->publisher->image = SystemUtils::uploadFile($_FILES['image'], StaticPaths::PUBLISHERS,$oldImage);
        }
        

        if ($this->publisher->update("id=".$_POST['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Publisher Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update Publisher !!!"];
        
          echo true;  
        
    }

    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->publisher->is_active = 0;
        $this->publisher->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->publisher->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Publisher Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete Publisher !!!"];
        
          echo true;  
        
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->publisher->is_active = 1;
        $this->publisher->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->publisher->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Publisher Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore Publisher !!!"];
        
          echo true;  
        
    }
}
