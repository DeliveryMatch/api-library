<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipments;

class InsertShipmentsShipmentResponse
{
    public int $location;
    /** @var ItemsResponse[] */
    public array $items;
    public string $shipmentID;
    public InsertShipmentsMethodResponse $shipmentMethods;
}