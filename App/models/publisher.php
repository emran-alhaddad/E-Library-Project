<?php
namespace coding\app\models;



class Publisher extends Model{
   

    function __construct()
    {
        parent::$tblName="publishers";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}