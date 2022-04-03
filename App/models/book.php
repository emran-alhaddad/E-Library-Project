<?php

namespace coding\app\models;

class Book extends Model{
    function __construct()
    {
        self::$tblName="books";
    }
}
?>