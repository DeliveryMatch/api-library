<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use JetBrains\PhpStorm\Internal;

class GetShipmentRequest implements \JsonSerializable
{
    protected int $id;
    protected string $orderNumber;

    public function __construct(array $shipment)
    {
        $this->id = $shipment['id'];
        $this->orderNumber = $shipment['orderNumber'];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getOrderNumber():string
    {
        return $this->orderNumber;
    }

    public function jsonSerialize()
    {
        return
            [ "shipment" =>
                [
                'id'   => $this->getId(),
                'orderNumber' => $this->getorderNumber()
                ],
            ];
    }
}