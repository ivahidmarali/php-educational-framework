<?php
use App\Container\App;

/**
 * @return App
 */
function app(){
    return App::getInstance();
}

/**
 * Get a singleton object with service container
 * @param string $classname
 * @param mixed $args
 * @return object
 */
function singleton(string $classname, $args = []){
    return \app()->getSingleton($classname, $args);
}

/**
 * Build a new object with service container
 * @param string $classname
 * @param mixed $args
 * @return object
 */
function build(string $classname, $args = []){
    return \app()->getObject($classname, $args);
}