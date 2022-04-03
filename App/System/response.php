<?php
namespace coding\app\system;

class Response{
    private $URL;
    private $data;

    function __construct()
    {
        $this->URL = "";
        $this->data = "";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    function redirect($url)
    {
        header("Location:".$url);
    }
}
?>