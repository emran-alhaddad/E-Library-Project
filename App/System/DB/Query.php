<?php

namespace coding\app\system\DB;

class Query
{

    protected $fields;
    protected $tables;
    protected $where;
    protected $logic;
    protected $values;



    public function __construct()
    {
        $this->fields = [];
        $this->tables = [];
        $this->where = [];
        $this->logic = "AND";
        $this->values = [];
    }

    public function clearAll()
    {
        $this->fields = [];
        $this->tables = [];
        $this->where = [];
        $this->logic = "AND";
        $this->values = [];
    }

    public function setLogic($type)
    {
        if (strtoupper($type) === "AND" || strtoupper($type) === "OR")
            $this->logic = strtoupper(" " . $type . " ");
        return $this;
    }


    public function __set($name, $value)
    {
        if (in_array($name, ["fields", "tables", "values", "where"])) {
                array_push($this->$name, $value);

        }
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
