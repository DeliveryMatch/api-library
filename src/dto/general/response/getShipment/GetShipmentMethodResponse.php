<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

use Cassandra\Date;

class GetShipmentMethodResponse
{
    public string $configurationID;
    public array $tariffID;
    public string $carrierName;
    public string $serviceLevel;
    public string $datePickup;
    public string $dateDelivery;
    public string $buy_price;
    public string $sell_price;
    public string $timeFrom;
    public string $timeTo;
}