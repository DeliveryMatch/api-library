<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DateTime;
use DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn\InsertCarrierResponse;
use DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn\InsertServiceLevelResponse;

class InsertShipmentPrintResponse
{
    public string $methodID;
    public InsertCarrierResponse $carrier;
    public InsertServiceLevelResponse $serviceLevel;
    public string $configurationID;
    public string $tariffID;
    public int $price;
    public int $buy_price;
    public string $description;
    public string $currency;
    public DateTime $dateDelivery;
    public DateTime $datePickup;
    public DateTime $timeFrom;
    public DateTime $timeTo;
    public string $title;
    public string $checkID;
}