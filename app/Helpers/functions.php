<?php
use App\Container\App;

/**
 * @return App
 */
function app(){
    return App::getInstance();
}

/**
 * @param string $classname
 * @param mixed $args
 * @return object
 */
function singleton(string $classname, $args = []){
    return \app()->getSingleton($classname, $args);
}

/**
 * @param string $classname
 * @param mixed $args
 * @return object
 */
function object(string $classname, $args = []){
    return \app()->getObject($classname, $args);
}