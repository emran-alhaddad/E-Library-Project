<?php

namespace coding\app\system;

class Router
{

    public $request;
    public $response;
    public function __construct($request)
    {
        $this->request = $request;
    }



    protected  static $routes = array();

    public static function use($url, $callback)
    {
        
        if (str_starts_with(AppSystem::$appSystem->request->getRoute(), $url)) {
            AppSystem::$appSystem->response->URL = $url;
            // self::$response->responseUrl = str_replace($url, "", self::$request->getRoute());
            $callback(AppSystem::$appSystem->request, AppSystem::$appSystem->response);
        }
        // else
        // {
        //     AppSystem::$appSystem->router->view(StaticPaths::VIEWS.'/404',[]);
        //     die();
        // }
    }

    public static function get($url, $callback)
    {
        self::$routes['GET'][$url] = $callback;
    }

    public static function post($url, $callback)
    {
        self::$routes['POST'][$url] = $callback;
    }

    public static function put($url, $callback)
    {
        self::$routes['PUT'][$url] = $callback;
    }

    public static function delete($url, $callback)
    {
        self::$routes['DELETE'][$url] = $callback;
    }

    public  function executeRoute()
    {
        $route = $this->request->getRoute();
        $method = $this->request->getRequestMethod();
        if(isset(self::$routes[$method][$route]))
        {
            
        $callback = self::$routes[$method][$route];

        if (isset($callback)) {
            if (is_array($callback)) {
                $callback[0] = new $callback[0];
            }

            call_user_func($callback);
        }
     } else {
         if(str_starts_with($route,"/admin"))
         $this->view(StaticPaths::ADMIN_VIEWS.'/404',[]);
         else
         $this->view(StaticPaths::USER_VIEWS.'/404',[]);
        }
    }

    public function view($v, $params)
    {
        require_once "$v.php";
    }
}
