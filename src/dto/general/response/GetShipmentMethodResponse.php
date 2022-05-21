<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class GetShipmentMethodResponse
{
    public Date $configurationID;
    public array $tariffID;
    public string $carrierName;
    public string $serviceLevel;
    public Date $datePickup;
    public Date $dateDelivery;
    public string $buy_price;
    public string $sell_price;
    public string $timeFrom;
    public string $timeTo;
}