<?php
namespace coding\app\system;

use coding\app\system\DB\QueryBuilder;

class AppSystem{
    public Request $request;
    public Response $response;
    public Router $router;
    public static AppSystem $appSystem;
    public QueryBuilder $queryBuider;
    
    function __construct(array $dbConfig)
    {
    	$this->queryBuider=new QueryBuilder($dbConfig['dbname']);
        self::$appSystem=$this;
        $this->request=new Request();
        $this->response=new Response();
        $this->router=new Router($this->request);

    } 
    
    public function start(){
        $this->router->executeRoute();
        
    }
    
}

?>