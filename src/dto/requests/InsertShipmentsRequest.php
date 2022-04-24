<?php

namespace DeliveryMatchApiLibrary\dto\requests;

class InsertShipmentsRequest
{
    /** @var InsertShipmentRequest[]  */
    private array $shipments;

    /**
     * @param InsertShipmentRequest[] $shipments
     */
    public function __construct(array $shipments)
    {
        $this->shipments = $shipments;
    }
}