<?php
echo "hello";
use core\router;
use core\request;

require "app/views/about.views.php";
require "vendor/autoload.php";
require "core/boostrap.php";
//require "core/router.php";
$router=new Router();
require "app/routes.php";
var_dump($router->routes);
try {
    Router::load('app/routes.php')
        ->direct(request::method(), request::uri());
} catch (Exception $e) {
}
