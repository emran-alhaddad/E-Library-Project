<?php
require_once('Query.php');

class InsertQuery extends Query
{
    private $fields;
    private $tables;
    private $values;


    public function __construct()
    {
        $this->fields = [];
        $this->tables = [];
        $this->values = [];
        print_r(get_class_vars(__CLASS__));
    }


    public function __set($name, $value)
    {
        if (in_array($name,["fields","tables","values"])) {
            if (is_string($value))
                array_push($this->$name, $value);
            else
                array_merge($this->$name, $value);
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }
}


// <?php
// require_once('Query.php');

// class InsertQuery extends Query
// {


//     public function __construct()
//     {
//         $this->fields = [];
//         $this->tables = [];
//         $this->values = [];
//         var_dump($this);
        
//     }


// }

