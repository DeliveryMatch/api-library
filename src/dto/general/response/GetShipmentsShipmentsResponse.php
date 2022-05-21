<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class GetShipmentsShipmentsResponse
{
    public string $id; //string
    public string $orderNumber; //array( undefined )
    public string $reference; //String
    public string $senderName; //array( undefined )
    public string $receiverName; //String
    public string $zipcode; //String
    public Date $dateAdded; //Date
    public string $channel; //String
    public string $country; //String
    public string $status; //String
    public string $carrierName; //String
    public string $serviceLevel; //String
    public array $barcodes; //array( undefined )
}