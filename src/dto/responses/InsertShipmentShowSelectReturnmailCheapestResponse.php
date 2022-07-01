<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn\InsertDropoffMethodsResponse;
use DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn\InsertShipmentMethodResponse;

class InsertShipmentShowSelectReturnmailCheapestResponse
{
    public string $status;
    public int $code;
    public string $message;
    public string $shipmentID;
    public InsertShipmentMethodResponse $shipmentMethods;
    public InsertDropoffMethodsResponse $dropoffMethods;
}