<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

use DateTime;

class DeliveryResponse
{
    public DateTime $deliveryDate;
    public DateTime $timeFrom;
    public DateTime $timeTo;
    public string $carrier;
    public string $serviceLevel;
    public string $barcode;
    public string $trackingURL;
}