<?php

namespace DeliveryMatchApiLibrary\dto\general\updates;

class ShipmentUpdate implements \JsonSerializable
{
    protected int $id;
    protected ?string $status;
    protected ?string $orderNumber;
    protected ?string $reference;
    protected ?string $note;
    protected ?int $labelSequence;
    protected ?bool $endOfShipment;

    /**
     * @param int $id
     * @param string|null $status
     * @param string|null $orderNumber
     * @param string|null $reference
     * @param string|null $note
     * @param int|null $labelSequence
     * @param bool|null $endOfShipment
     */
    public function __construct(int $id, ?string $status = null, ?string $orderNumber = null, ?string $reference = null, ?string $note = null, ?int $labelSequence = null, ?bool $endOfShipment = null)
    {
        $this->id = $id;
        $this->status = $status;
        $this->orderNumber = $orderNumber;
        $this->reference = $reference;
        $this->note = $note;
        $this->labelSequence = $labelSequence;
        $this->endOfShipment = $endOfShipment;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /** @return string|null */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /** @return string|null */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /** @return string|null */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /** @return string|null */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /** @return int|null */
    public function getLabelSequence(): ?int
    {
        return $this->labelSequence;
    }

    /** @return bool|null */
    public function getEndOfShipment(): ?bool
    {
        return $this->endOfShipment;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'status' => $this->getStatus(),
            'orderNumber' => $this->getOrderNumber(),
            'reference' => $this->getReference(),
            'note' => $this->getNote(),
            'labelSequence' => $this->getLabelSequence(),
            'endOfShipment' => $this->getEndOfShipment(),
        ];
    }

}