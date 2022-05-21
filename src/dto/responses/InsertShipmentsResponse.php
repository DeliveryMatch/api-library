<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\InsertShipmentsShipmentResponse;

class InsertShipmentsResponse
{
    public string $status; //String
    public int $code; //int
    public string $message; //String
    public int $totalBuy; //int
    public int $totalSell; //int
    public array $lowestPricePerLocation;
    public bool $longestDeliverydate;
    public array $options;  //array( undefined )

    /** @var InsertShipmentsShipmentResponse[] */
    public array $shipments; //array( Shipments )
}