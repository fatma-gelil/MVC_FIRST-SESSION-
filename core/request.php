<?php

namespace core;

class request
{
public static function uri(){
    return (trim(parse_url($_SERVER['REQUEST_METHOD'],PHP_URL_PATH),"/"));
}
public static function method(){
    return strtolower($_SERVER['REQUEST_METHOD']);
}
}