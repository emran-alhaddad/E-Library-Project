<?php
require_once("App/System/System.php");
require_once(System::SYSTEM . "Express.php");
require_once(System::CONTROLLER . "controller.php");


class shopBageRoutes
{

    public static function show($url = "")
    {
        Express::get($url . '/show', function () {
            $object = new Express::$controller;
            call_user_func_array([$object, Express::$method], Express::$parameters);
        });

        Express::get('/add', function () {
        });

        Express::get('/eidt', function () {
        });

        Express::get('/delete', function () {
        });
    }
}
