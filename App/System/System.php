<?php
require_once("App/System/System.php");
require_once(System::SYSTEM . "Error.php");

class System
{

    public const ROOT = "App/";
    public const SYSTEM = self::ROOT . "System/";
    public const MODEL = self::ROOT . "Model/";
    public const VIEW = self::ROOT . "View/";
    public const CONTROLLER = self::ROOT . "Controller/";
    public const ASSETS = self::ROOT . "Public/";
    public const ROUTS = self::ROOT . "Routes/";
    public const COMPONENTS = self::VIEW . "Components/";



    public static function render($file, ...$args)
    {
        if (file_exists($file)) 
            require_once($file);
        else
        throw new SystemError(code:SystemError::FILE_NOT_FOUND);
    }

    public static function redirect($dest)
    {
        try {
            return header("Location:" .$dest);
        } catch (SystemError $err) {
            throw new SystemError(code: SystemError::DIR_NOT_FOUND);
        }
    }
}
