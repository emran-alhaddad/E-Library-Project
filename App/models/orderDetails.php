<?php
namespace coding\app\models;



class OrderDetails extends Model{
   

    function __construct()
    {
        parent::$tblName="order_details";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}