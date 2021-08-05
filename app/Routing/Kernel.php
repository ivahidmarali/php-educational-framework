<?php

namespace App\Routing;

use App\Exceptions\NotFoundException;

class Kernel
{
    /**
     * @var Router
     */
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->init();
    }

    protected function init()
    {
        try {
            $this->router->route();
        }catch (\App\Exceptions\NotFoundException $exception){
            header("HTTP/1.1 404 Not Found");
            echo "<html><head><title>Mori Framework! | Not Found!</title></head><body><H1>404!</H1></body></html>";
        }
    }
}