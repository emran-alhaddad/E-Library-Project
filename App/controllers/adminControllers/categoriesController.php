<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\Category;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;
use coding\app\system\SystemUtils;

class CategoriesController extends Controller
{
    public Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function show()
    {
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $this->category->getAll(), 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $this->category->getAll()];

        $this->view(StaticPaths::ADMIN_VIEWS . '/categories', $args);
    }

    public function addNew()
    {

        $this->category->name = $_POST['name'];
        $this->category->created_by = 1;
        $imageName = SystemUtils::uploadFile($_FILES['image'], StaticPaths::CATEGORIES);
        $this->category->image = $imageName != null ? $imageName : "default.png";

        if ($this->category->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New Category Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add Category"];
        AppSystem::$appSystem->response->redirect("/admin/categories");
    }

    public function editItem()
    {
        $this->category->name = $_POST['name'];
        $this->category->created_by = 2;
        $this->category->updated_at = "".date("Y-m-d H:i:s", time());

        if(isset($_FILES['image']))
        {
            $oldImage = $this->category->getSingle("id=".$_POST['id'])[0]->image;
            $this->category->image = SystemUtils::uploadFile($_FILES['image'], StaticPaths::CATEGORIES,$oldImage);
        }
        

        if ($this->category->update("id=".$_POST['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Category Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update Category !!!"];
        
          echo true;  
        
    }

    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->category->is_active = 0;
        $this->category->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->category->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Category Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete Category !!!"];
        
          echo true;  
        
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->category->is_active = 1;
        $this->category->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->category->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Category Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore Category !!!"];
        
          echo true;  
        
    }
}
