<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

use DateTime;

class ShipmentResponse
{
    public string $shipmentID;
    public DateTime $createdAt;
    public string $orderNumber;
    public string $reference;
    public array $codeShipment;
    public string $language;
    public string $currency;
    public DateTime $firstPickupDate;
    public array $note;
    public string $status;
}