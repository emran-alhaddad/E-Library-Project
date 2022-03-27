<?php
require_once("App/System/System.php");
class Express
{

  public  static $controller = 'Home';
  public  static $method = 'show';
  public  static $parameters = [];

  public static function get($url, $callback = null)
  {

    $urlParts = explode('/', $url);
    if (file_exists(System::CONTROLLER . $urlParts[0] . ".php")) {

      self::$controller = $urlParts[0];
      System::render(System::CONTROLLER . self::$controller . ".php");
      
      if (count($urlParts)>1 && method_exists(self::$controller, $urlParts[1])) {
        self::$method = $urlParts[1];
        self::$parameters = array_values($urlParts);
      }

      $callback();
    }
    
  }


}
