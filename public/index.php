<?php
use App\Routing\Kernel;
use App\Routing\Router;

require '../vendor/autoload.php';

new Kernel(new Router);