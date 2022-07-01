<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\insertShipments\InsertShipmentsShipmentResponse;

class InsertShipmentsResponse
{
    public string $status;
    public int $code;
    public string $message;
    public int $totalBuy;
    public int $totalSell;
    public array $lowestPricePerLocation;
    public bool $longestDeliverydate;
    public array $options;

    /** @var InsertShipmentsShipmentResponse[] */
    public array $shipments;
}