<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class ShipmentResponse
{
    public string $shipmentID;
    public Date $createdAt;
    public Date $orderNumber;
    public string $reference;
    public array $codeShipment;
    public string $language;
    public string $currency;
    public array $firstPickupDate;
    public array $note;
    public string $status;
}