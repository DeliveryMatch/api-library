<?php

namespace DeliveryMatchApiLibrary\exceptions;

use Exception;

class DeliveryMatchException extends Exception
{
    public function __construct($message, $code, $status)
    {
        parent::__construct("$status: $message", $code);
    }

    public function __toString()
    {
        return "\033[01;31mCode: {$this->code}, message: {$this->message}\033[0m\n";
    }
}