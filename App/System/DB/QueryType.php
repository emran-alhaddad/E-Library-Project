<?php

namespace coding\app\system\DB;


abstract class QueryType
{
    public  const SELECT = "SELECT Query";
    public  const INSERT = "INSERT Query";
    public  const UPDATE = "UPDATE Query";
    public  const DELETE = "DELETE Query";
    public  const DONE = 1005;
}


