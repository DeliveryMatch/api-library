<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DateTime;
use DeliveryMatchApiLibrary\dto\general\response\updateShipment\DeliveryResponse;
use DeliveryMatchApiLibrary\dto\general\response\updateShipment\PickupResponse;
use DeliveryMatchApiLibrary\dto\general\response\updateShipment\UpdateShipmentPackagesResponse;

class UpdateShipmentResponse
{
    public string $status;
    public int $code;
    public string $message;
    private string $shipmentID;
    private DateTime $dateCreated;
    private string $orderNumber;
    private string $reference;
    private string $postcode;
    private PickupResponse $pickup;
    private DeliveryResponse $delivery;
    private string $labelURL;
    private string $CMR;
    private string $ZPL;

    /** @var UpdateShipmentPackagesResponse[] */
    private array $packages;
}