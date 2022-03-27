<?php

class SystemError extends Exception
{

    public const FILE_NOT_FOUND = 1001;
    public const DIR_NOT_FOUND = 1002;
    public const SQL_ERROR = 1003;
    public const INPUT_ERROR = 1004;
    public $msg = "";

    public function __construct($code)
    {

        $this->msg = $code;
        parent::__wakeup();
    }
}
