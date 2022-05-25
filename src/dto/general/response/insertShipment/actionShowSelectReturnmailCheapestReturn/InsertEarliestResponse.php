<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

use DateTime;

class InsertEarliestResponse
{
    public string $methodID;
    public InsertCarrierResponse $carrier;
    public InsertServiceLevelResponse $serviceLevel;
    public string $configurationID;
    public string $tariffID;
    public float $price;
    public float $buy_price;
    public string $description;
    public string $currency;
    public DateTime $dateDelivery;
    public DateTime $datePickup;
    public string $timeFrom;
    public string $timeTo;
    public string $title;
    public string $checkID;

}