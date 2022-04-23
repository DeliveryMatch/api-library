<?php

namespace DeliveryMatchApiLibrary\dto\general\updates;

class ShipmentUpdate
{
    private int $id;
    private ?string $status;
    private ?string $orderNumber;
    private ?string $reference;
    private ?string $note;
    private ?int $labelSequence;
    private ?bool $endOfShipment;

    /**
     * @param int $id
     * @param string|null $status
     * @param string|null $orderNumber
     * @param string|null $reference
     * @param string|null $note
     * @param int|null $labelSequence
     * @param bool|null $endOfShipment
     */
    public function __construct(int $id, ?string $status, ?string $orderNumber, ?string $reference, ?string $note, ?int $labelSequence, ?bool $endOfShipment)
    {
        $this->id = $id;
        $this->status = $status;
        $this->orderNumber = $orderNumber;
        $this->reference = $reference;
        $this->note = $note;
        $this->labelSequence = $labelSequence;
        $this->endOfShipment = $endOfShipment;
    }
}