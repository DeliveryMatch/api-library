<?php

namespace DeliveryMatchApiLibrary\dto\requests;

class GetLabelRequest implements \JsonSerializable
{
    protected ?int $id;
    protected ?string $orderNumber;
    protected ?int $sequence;
    protected ?bool $endOfShipment;

    /**
     * @param int|null $id
     * @param string|null $orderNumber
     * @param int|null $sequence
     * @param bool|null $endOfShipment
     */
    public function __construct(?int $id = null, ?string $orderNumber = null, ?int $sequence = null, ?bool $endOfShipment = null)
    {
        $this->id = $id;
        $this->orderNumber = $orderNumber;
        $this->sequence = $sequence;
        $this->endOfShipment = $endOfShipment;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * @return int|null
     */
    public function getSequence(): ?int
    {
        return $this->sequence;
    }

    /**
     * @return bool|null
     */
    public function getEndOfShipment(): ?bool
    {
        return $this->endOfShipment;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [ "shipment" =>
                [
                    'id' => $this->getId(),
                    'orderNumber' => $this->getorderNumber(),
                ],
                "sequence" => $this->getSequence(),
                "endOfShipment" => $this->getEndOfShipment()
            ];
    }
}