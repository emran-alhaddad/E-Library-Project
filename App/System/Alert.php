<?php
require_once("App/System/System.php");
class Alert{

    public const SUCCESS = "success";
    public const FAILURE = "danger";
    public const WARNING = "warning";
    public const INFO = "info";

    public static function show($type,$msg,$dest,...$args)
    {
        if(file_exists(System::COMPONENTS."feedback.php"))
        require_once(System::COMPONENTS."feedback.php");

        if(isset($dest))
        {
            if(file_exists(System::VIEW.$dest.".php"))
            require_once(System::VIEW.$dest.".php");
            else
            throw new Error(code:Error::FILE_NOT_FOUND);
        }
    }

}

?>