<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

use Cassandra\Date;

class DeliveryResponse
{
    public string $deliveryDate;
    public string $timeFrom;
    public string $timeTo;
    public string $carrier;
    public string $serviceLevel;
    public string $barcode;
    public string $trackingURL;
}