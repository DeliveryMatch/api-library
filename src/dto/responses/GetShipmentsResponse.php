<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\GetShipmentsShipmentsResponse;

class GetShipmentsResponse
{
    /** @var GetShipmentsShipmentsResponse[] */
    public array $shipments;
    public int $code;
    public string $status;
}