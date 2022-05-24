<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\getDesign\DesignResponse;

class GetDesignResponse
{
    public string $status;
    public int $code;
    public string $message;
    public DesignResponse $design;
}