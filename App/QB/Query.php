<?php

use function PHPSTORM_META\type;

class Query
{


    public function __set($name, $value)
    {
        
       if(isset($this->{$name}))
       {
            if (is_string($value))
                array_push($this->$name, $value);
            else
                array_merge($this->$name, $value);
       }
       else
       $this->createProperty($name,$value);
       
    }

    public function __get($name)
    {
        return $this->{$name};
    }


    protected function createProperty($name,$value)
    {
        $this->{$name} = $value;
    }

    

}
