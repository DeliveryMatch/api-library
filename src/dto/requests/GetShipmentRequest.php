<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Internal;

class GetShipmentRequest implements \JsonSerializable
{
    protected int $id;
    protected string $orderNumber;

    /** @param array $shipment */
    public function __construct(array $shipment)
    {
        $this->id = $shipment['id'];
        $this->orderNumber = $shipment['orderNumber'];
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /** @return string */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /** @return array */
    #[ArrayShape(["shipment" => "array"])] public function jsonSerialize(): array
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