<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\Author;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;
use coding\app\system\SystemUtils;

class AuthorController extends Controller
{
    public Author $author;

    public function __construct()
    {
        $this->author = new Author();
    }

    public function show()
    {
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $this->author->getAll(), 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $this->author->getAll()];

        $this->view(StaticPaths::ADMIN_VIEWS . '/authors', $args);
    }

    public function addNew()
    {

        $this->author->name = $_POST['name'];
        $this->author->phone = $_POST['phone'];
        $this->author->email = $_POST['email'];
        $this->author->bio = $_POST['bio'];
        $this->author->created_by = 1;
        if ($this->author->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New Author Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add Author"];
        AppSystem::$appSystem->response->redirect("/admin/author");
    }

    public function editItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->author->name = $sent_vars['name'];
        $this->author->phone = $sent_vars['phone'];
        $this->author->email = $sent_vars['email'];
        $this->author->bio = $sent_vars['bio'];
        $this->author->created_by = 2;
        $this->author->updated_at = "".date("Y-m-d H:i:s", time());
        

        if ($this->author->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Author Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update Author !!!"];
        
          echo true;  
        
    }

    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->author->is_active = 0;
        $this->author->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->author->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Author Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete Author !!!"];
        
          echo true;  
        
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->author->is_active = 1;
        $this->author->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->author->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Author Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore Author !!!"];
        
          echo true;  
        
    }
}
