<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturn;

class InsertEarliestResponse
{
    public string $methodID; //String
    public InsertCarrierResponse $carrier; //Carrier
    public InsertServiceLevelResponse $serviceLevel; //ServiceLevel
    public string $configurationID; //Date
    public string $tariffID; //String
    public float $price; //double
    public float $buy_price; //int
    public string $description; //String
    public string $currency; //String
    public string $dateDelivery; //Date
    public string $datePickup; //Date
    public string $timeFrom; //String
    public string $timeTo; //String
    public string $title; //String
    public string $checkID; //String

}