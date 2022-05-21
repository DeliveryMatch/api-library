<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use Cassandra\Date;
use DeliveryMatchApiLibrary\dto\general\response\DeliveryResponse;
use DeliveryMatchApiLibrary\dto\general\response\UpdateShipmentPackagesResponse;
use DeliveryMatchApiLibrary\dto\general\response\PickupResponse;

class UpdateShipmentResponse
{
    private string $status;
    private int $code;
    private string $message;
    private string $shipmentID;
    private Date $dateCreated;
    private Date $orderNumber;
    private string $reference;
    private string $postcode;
    private PickupResponse $pickup;
    private DeliveryResponse $delivery;
    private string $labelURL;
    private string $CMR;
    private string $ZPL;

    /** @var UpdateShipmentPackagesResponse[] */
    private array $packages; //array( UpdateShipmentPackagesResponse )
}