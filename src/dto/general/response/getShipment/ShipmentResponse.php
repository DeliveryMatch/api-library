<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

use DateTime;

class ShipmentResponse
{
    private string $shipmentID;
    private DateTime $createdAt;
    private string $orderNumber;
    private string $reference;
    private array $codeShipment;
    private string $language;
    private string $currency;
    private DateTime $firstPickupDate;
    private array $note;
    private string $status;

    /**
     * @return string
     */
    public function getShipmentID(): string
    {
        return $this->shipmentID;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @return array
     */
    public function getCodeShipment(): array
    {
        return $this->codeShipment;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return DateTime
     */
    public function getFirstPickupDate(): DateTime
    {
        return $this->firstPickupDate;
    }

    /**
     * @return array
     */
    public function getNote(): array
    {
        return $this->note;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}