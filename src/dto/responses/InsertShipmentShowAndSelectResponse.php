<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowAndSelect\InsertDropoffMethodsResponse;
use DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowAndSelect\InsertShipmentMethodResponse;

class InsertShipmentShowAndSelectResponse
{
    public string $status;
    public int $code;
    public string $message;
    public string $shipmentID;
    public InsertShipmentMethodResponse $shipmentMethods;
    public InsertDropoffMethodsResponse $dropoffMethods;
}