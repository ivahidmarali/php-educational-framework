<?php

namespace App\Container;

use App\Controllers\ContactUsController;
use App\Routing\Router;

class App
{

    /**
     * @var App
     */
    public static $instance;

    /**
     * @var object[]
     */
    public static $singletons = [];

    public function __construct()
    {

    }

    /**
     * @return App
     */
    public static function getInstance()
    {
        if(is_null(self::$instance))
            self::$instance = new self();

        return self::$instance;
    }

    /**
     * @param string $className
     * @param mixed $args
     * @return object
     */
    public function getSingleton(string $className, $args = [])
    {
        if(!isset(self::$singletons[$className]))
            self::$singletons[$className] = $this->makeInstance($className, $args);

        return self::$singletons[$className];
    }

    /**
     * @param string $className
     * @param array $args
     * @return object
     */
    public function getObject(string $className, $args = [])
    {
        return $this->makeInstance($className, $args);
    }

    /**
     * @param string $className
     * @param mixed $args
     * @return object $classname
     */
    protected function makeInstance(string $className, $args = [])
    {
        return new $className(...$args);
    }
}