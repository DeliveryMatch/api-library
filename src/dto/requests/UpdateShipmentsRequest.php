<?php

namespace DeliveryMatchApiLibrary\dto\requests;

class UpdateShipmentsRequest
{
    /** @var UpdateShipmentRequest[] */
    private array $shipments;

    /**
     * @param UpdateShipmentRequest[] $shipments
     */
    public function __construct(array $shipments)
    {
        $this->shipments = $shipments;
    }
}