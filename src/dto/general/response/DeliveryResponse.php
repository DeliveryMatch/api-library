<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class DeliveryResponse
{
    public Date $deliveryDate;
    public string $timeFrom;
    public string $timeTo;
    public string $carrier;
    public string $serviceLevel;
    public string $barcode;
    public string $trackingURL;
}