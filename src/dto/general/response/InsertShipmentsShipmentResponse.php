<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

class InsertShipmentsShipmentResponse
{
    public int $location;
    /** @var ItemsResponse[] */
    public array $items;
    public string $shipmentID;
    public InsertsShipmentMethodResponse $shipmentMethods;
}