<?php
namespace core;
use mysql_xdevapi\Exception;

class router{
public $routes=[
    'get'=>[

    ],
    'post'=>[

    ]

];
public static function load($file){
    $router=new static();
    require $file;
    return $router;
}

    public function get($uri,$controller)
    {
        //uri is a key on the array that's why its in[]
        return $this->routes['get'][$uri]=$controller;
    }
    public function post($uri,$controller)
    {
        //uri is a key on the array that's why its in[]
        return $this->routes['post'][$uri]=$controller;
    }

    /**
     * @throws \Exception
     */
    public function direct($uri, $requesttype)
    {
      if ( array_key_exists($uri, $this->routes[ $requesttype ])) {
          return $this->callAction(...explode('@', $this->routes[ $requesttype ][ $uri ]));
      }
          throw new Exception("invalid uri");
    }

    public function callAction($controller,$action)
    {
         $controller = "app\\controllers\\";//{$controller}
         $controller = new $controller;
        if (!method_exists($controller,$action)){
           throw new Exception('action not exists');
        }
        return $controller->$action();
    }


}