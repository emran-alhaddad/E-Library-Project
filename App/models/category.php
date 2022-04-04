<?php

namespace coding\app\models;

class Category extends Model{
    function __construct()
    {
        self::$tblName="categories";
    }
}
?>