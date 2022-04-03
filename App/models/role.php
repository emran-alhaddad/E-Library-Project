<?php
namespace coding\app\models;



class Role extends Model{
   

    function __construct()
    {
        parent::$tblName="roles";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}