<?php

class Router{

    public static function use($url,$calback)
    {
        $calback($url[0]);
    }
}

?>