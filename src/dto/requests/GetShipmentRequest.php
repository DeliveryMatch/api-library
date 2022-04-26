<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use JetBrains\PhpStorm\Internal;

class GetShipmentRequest implements \JsonSerializable
{
    protected int $id;
    protected string $orderNumber;

    /**
     * @param int $id
     * @param string $orderNumber
     */
    public function __construct(int $id, string $orderNumber)
    {
        $this->id = $id;
        $this->orderNumber = $orderNumber;
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
    public function jsonSerialize(): array
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