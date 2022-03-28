<?php

namespace DeliveryMatchApiLibrary\exceptions;

use Exception;

class InvalidDeliveryMatchLinkException extends Exception
{
    public function __construct($url)
    {
        parent::__construct("$url is not a valid DeliveryMatch API link");
    }
}