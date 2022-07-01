<?php

namespace DeliveryMatchApiLibrary\dto\general;
use DateTime;

class Shipment implements \JsonSerializable
{
    protected string $orderNumber;
    protected string $reference;
    protected string $language;
    protected string $currency;
    protected ?DateTime $firstPickUpDate;
    protected ?DateTime $firstPickUpDateTime;
    protected ?string $carrier;
    protected ?string $service;
    protected ?DateTime $deliveryTimeFrom;
    protected ?DateTime $deliveryTimeTo;
    protected ?bool $inbound;
    protected ?int $numPallets;
    protected ?bool $cod;
    protected ?bool $signature;
    protected ?bool $noNeighbor;
    protected ?bool $insured;
    protected ?string $incoterm;
    protected ?string $route;
    protected ?string $warehousezone;
    protected ?string $batch;
    protected ?string $note;
    protected ?string $instructions;
    protected ?string $printerchannel;
    protected ?string $getdiscounts;

    /**
     * @param string $orderNumber
     * @param string $reference
     * @param string $language
     * @param string $currency
     * @param DateTime|null $firstPickUpDate
     * @param DateTime|null $firstPickUpDateTime
     * @param string|null $carrier
     * @param string|null $service
     * @param DateTime|null $deliveryTimeFrom
     * @param DateTime|null $deliveryTimeTo
     * @param bool|null $inbound
     * @param int|null $numPallets
     * @param bool|null $cod
     * @param bool|null $signature
     * @param bool|null $noNeighbor
     * @param bool|null $insured
     * @param string|null $incoterm
     * @param string|null $route
     * @param string|null $warehousezone
     * @param string|null $batch
     * @param string|null $note
     * @param string|null $instructions
     * @param string|null $printerchannel
     * @param string|null $getdiscounts
     */
    public function __construct(string $orderNumber, string $reference, string $language, string $currency, ?DateTime $firstPickUpDate, ?DateTime $firstPickUpDateTime, ?string $carrier, ?string $service, ?DateTime $deliveryTimeFrom, ?DateTime $deliveryTimeTo, ?bool $inbound, ?int $numPallets, ?bool $cod, ?bool $signature, ?bool $noNeighbor, ?bool $insured, ?string $incoterm, ?string $route, ?string $warehousezone, ?string $batch, ?string $note, ?string $instructions, ?string $printerchannel, ?string $getdiscounts)
    {
        $this->orderNumber = $orderNumber;
        $this->reference = $reference;
        $this->language = $language;
        $this->currency = $currency;
        $this->firstPickUpDate = $firstPickUpDate;
        $this->firstPickUpDateTime = $firstPickUpDateTime;
        $this->carrier = $carrier;
        $this->service = $service;
        $this->deliveryTimeFrom = $deliveryTimeFrom;
        $this->deliveryTimeTo = $deliveryTimeTo;
        $this->inbound = $inbound;
        $this->numPallets = $numPallets;
        $this->cod = $cod;
        $this->signature = $signature;
        $this->noNeighbor = $noNeighbor;
        $this->insured = $insured;
        $this->incoterm = $incoterm;
        $this->route = $route;
        $this->warehousezone = $warehousezone;
        $this->batch = $batch;
        $this->note = $note;
        $this->instructions = $instructions;
        $this->printerchannel = $printerchannel;
        $this->getdiscounts = $getdiscounts;
    }

    /** @return string */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /** @return string */
    public function getReference(): string
    {
        return $this->reference;
    }

    /** @return string */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /** @return string */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /** @return DateTime|null */
    public function getFirstPickUpDate(): ?DateTime
    {
        return $this->firstPickUpDate;
    }

    /** @return DateTime|null */
    public function getFirstPickUpDateTime(): ?DateTime
    {
        return $this->firstPickUpDateTime;
    }

    /** @return string|null */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /** @return string|null */
    public function getService(): ?string
    {
        return $this->service;
    }

    /** @return DateTime|null */
    public function getDeliveryTimeFrom(): ?DateTime
    {
        return $this->deliveryTimeFrom;
    }

    /** @return DateTime|null */
    public function getDeliveryTimeTo(): ?DateTime
    {
        return $this->deliveryTimeTo;
    }

    /** @return bool|null */
    public function getInbound(): ?bool
    {
        return $this->inbound;
    }

    /** @return int|null */
    public function getNumPallets(): ?int
    {
        return $this->numPallets;
    }

    /** @return bool|null */
    public function getCod(): ?bool
    {
        return $this->cod;
    }

    /** @return bool|null */
    public function getSignature(): ?bool
    {
        return $this->signature;
    }

    /** @return bool|null */
    public function getNoNeighbor(): ?bool
    {
        return $this->noNeighbor;
    }

    /** @return bool|null */
    public function getInsured(): ?bool
    {
        return $this->insured;
    }

    /** @return string|null */
    public function getIncoterm(): ?string
    {
        return $this->incoterm;
    }

    /** @return string|null */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /** @return string|null */
    public function getWarehousezone(): ?string
    {
        return $this->warehousezone;
    }

    /** @return string|null */
    public function getBatch(): ?string
    {
        return $this->batch;
    }

    /** @return string|null */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /** @return string|null */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /** @return string|null */
    public function getPrinterchannel(): ?string
    {
        return $this->printerchannel;
    }

    /** @return string|null */
    public function getGetdiscounts(): ?string
    {
        return $this->getdiscounts;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
                'orderNumber' => $this->getOrderNumber(),
                'reference' => $this->getReference(),
                'language' => $this->getLanguage(),
                'currency' => $this->getCurrency(),
                'firstPickUpDate' => is_null($this->getFirstPickUpDate()) ? $this->getFirstPickUpDate() : $this->getFirstPickUpDate()->format('Y-m-d'),
                'firstPickUpDateTime' => is_null($this->getFirstPickUpDateTime()) ? $this->getFirstPickUpDateTime() : $this->getFirstPickUpDateTime()->format('Y-m-d'),
                'carrier' => $this->getCarrier(),
                'service' => $this->getService(),
                'deliveryTimeFrom' => is_null($this->getDeliveryTimeFrom()) ? $this->getDeliveryTimeFrom() : $this->getDeliveryTimeFrom()->format('Y-m-d'),
                'deliveryTimeTo' => is_null($this->getDeliveryTimeTo()) ? $this->getDeliveryTimeTo() : $this->getDeliveryTimeTo()->format('Y-m-d'),
                'inbound' => $this->getInbound(),
                'numPallets' => $this->getNumPallets(),
                'cod' => $this->getCod(),
                'signature' => $this->getSignature(),
                'noNeighbor' => $this->getNoNeighbor(),
                'insured' => $this->getInsured(),
                'incoterm' => $this->getIncoterm(),
                'route' => $this->getRoute(),
                'warehousezone' => $this->getWarehousezone(),
                'batch' => $this->getBatch(),
                'note' => $this->getNote(),
                'instructions' => $this->getInstructions(),
                'printerchannel' => $this->getPrinterchannel(),
                'getdiscounts' => $this->getGetdiscounts(),
        ];
    }
}