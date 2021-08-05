<?php

namespace App\Routing;

use App\Controllers\AboutUsController;
use App\Controllers\ContactUsController;
use App\Controllers\HomeController;
use App\Exceptions\NotFoundException;

class Router
{
    protected $path;

    public function __construct()
    {
        $this->path = $this->determinePath();
    }

    protected function determinePath()
    {
        if(isset($_SERVER['PATH_INFO']))
            return $_SERVER['PATH_INFO'];
        return '/';
    }

    /**
     * @throws NotFoundException
     */
    public function route()
    {
        switch ($this->path){
            case '/':
                $c = new HomeController();
                $c->index();
                break;
            case '/about-us':
                $c = new AboutUsController();
                $c->index();
                break;
            case '/contact-us':
                $c = new ContactUsController();
                $c->index();
                break;
            default:
                throw new NotFoundException();
        }
    }
}