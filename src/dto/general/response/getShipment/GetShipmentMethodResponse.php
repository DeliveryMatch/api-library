<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

use DateTime;

class GetShipmentMethodResponse
{
    public string $configurationID;
    public array $tariffID;
    public string $carrierName;
    public string $serviceLevel;
    public DateTime $datePickup;
    public DateTime $dateDelivery;
    public string $buy_price;
    public string $sell_price;
    public DateTime $timeFrom;
    public DateTime $timeTo;
}