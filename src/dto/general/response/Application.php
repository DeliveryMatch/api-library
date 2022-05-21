<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;
use DeliveryMatchApiLibrary\dto\general\Package;

class Application
{
    public string $status;
    public int $code;
    public string $message;
    public string $shipmentID;
    public Date $dateCreated;
    public Date $orderNumber;
    public string $reference;
    public string $postcode;
    public Pickup $pickup;
    public Delivery $delivery;
    public string $labelURL;
    public string $CMR;
    public string $ZPL;

    /** @var Package[] */
    public array $packages; //array( Packages )
}