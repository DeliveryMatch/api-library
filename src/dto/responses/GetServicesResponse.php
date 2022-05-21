<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\GetServicesServicesResponse;

class GetServicesResponse
{
    /** @var GetServicesServicesResponse[] */
    public array $services;
    public int $code;
    public string $status;
}