<?php

namespace App\Exceptions;

use \Exception;
use \Throwable;

class NotFoundException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        if ($message === "")
            $message = "404 Not Found!";
        if ($code === 0)
            $code = 500;
        parent::__construct($message, $code, $previous);
    }
}
