<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

class InsertLowestPriceResponse
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
    public string $dateDelivery;
    public string $datePickup;
    public string $timeFrom;
    public string $timeTo;
    public string $title;
    public string $checkID;

}