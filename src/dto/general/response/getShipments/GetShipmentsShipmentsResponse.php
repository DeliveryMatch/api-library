<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipments;

use Cassandra\Date;

class GetShipmentsShipmentsResponse
{
    public string $id;
    public string $orderNumber;
    public string $reference;
    public string $senderName;
    public string $receiverName;
    public string $zipcode;
    public string $dateAdded;
    public string $channel;
    public string $country;
    public string $status;
    public string $carrierName;
    public string $serviceLevel;
    /** @var string[] */
    public array $barcodes;
}