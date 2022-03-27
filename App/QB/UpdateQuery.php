<?php

class UpdateQuery
{
    private $fields;
    private $tables;
    private $values;
    private $logic;
    private $where;


    public function __construct()
    {
        $this->fields = [];
        $this->tables = [];
        $this->values = [];
        $this->where = [];
        $this->logic = " AND ";
    }

    
    public function setLogic($type)
    {
        if (strtoupper($type) === "AND" || strtoupper($type) === "OR")
            $this->logic = strtoupper(" " . $type . " ");
        return $this;
    }


    public function __set($name, $value)
    {
        if (in_array($name,["fields","tables","values","where"])) {
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
