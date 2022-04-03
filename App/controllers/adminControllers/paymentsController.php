<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\Payment;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;
use coding\app\system\SystemUtils;

class PaymentsController extends Controller
{
    public Payment $payment;

    public function __construct()
    {
        $this->payment = new Payment();
    }

    public function show()
    {
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $this->payment->getAll(), 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $this->payment->getAll()];

        $this->view(StaticPaths::ADMIN_VIEWS . '/payments', $args);
    }

    public function addNew()
    {

        $this->payment->name = $_POST['name'];
        $this->payment->created_by = 1;
        $imageName = SystemUtils::uploadFile($_FILES['image'], StaticPaths::PAYMENTS);
        $this->payment->image = $imageName != null ? $imageName : "default.png";

        if ($this->payment->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New Payment Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add Payment"];
        AppSystem::$appSystem->response->redirect("/admin/payments");
    }

    public function editItem()
    {
        $this->payment->name = $_POST['name'];
        $this->payment->created_by = 2;
        $this->payment->updated_at = "".date("Y-m-d H:i:s", time());

        if(isset($_FILES['image']))
        {
            $oldImage = $this->payment->getSingle("id=".$_POST['id'])[0]->image;
            $this->payment->image = SystemUtils::uploadFile($_FILES['image'], StaticPaths::PAYMENTS,$oldImage);
        }
        

        if ($this->payment->update("id=".$_POST['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Payment Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update Payment !!!"];
        
          echo true;  
        
    }

    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->payment->is_active = 0;
        $this->payment->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->payment->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Payment Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete Payment !!!"];
        
          echo true;  
        
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->payment->is_active = 1;
        $this->payment->updated_at = "".date("Y-m-d H:i:s", time());

        if ($this->payment->update("id=".$sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Payment Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore Payment !!!"];
        
          echo true;  
        
    }
}
