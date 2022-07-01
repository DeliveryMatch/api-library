<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipments;

use DateTime;

class GetShipmentsShipmentsResponse
{
    private string $id;
    private string $orderNumber;
    private string $reference;
    private string $senderName;
    private string $receiverName;
    private string $zipcode;
    private DateTime $dateAdded;
    private string $channel;
    private string $country;
    private string $status;
    private string $carrierName;
    private string $serviceLevel;
    /** @var string[] */
    private array $barcodes;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
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
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * @return string
     */
    public function getReceiverName(): string
    {
        return $this->receiverName;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime
    {
        return $this->dateAdded;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getCarrierName(): string
    {
        return $this->carrierName;
    }

    /**
     * @return string
     */
    public function getServiceLevel(): string
    {
        return $this->serviceLevel;
    }

    /**
     * @return string[]
     */
    public function getBarcodes(): array
    {
        return $this->barcodes;
    }
}