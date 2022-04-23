<?php

namespace DeliveryMatchApiLibrary\dto;
use DateTime;

class Shipment
{
    private string $orderNumber;
    private string $reference;
    private string $language;
    private string $currency;
    private ?DateTime $firstPickUpDate;
    private ?DateTime $firstPickUpDateTime;
    private ?string $carrier;
    private ?string $service;
    private ?string $deliveryTimeFrom;
    private ?string $deliveryTimeTo;
    private ?bool $inbound;
    private ?int $numPallets;
    private ?bool $cod;
    private ?bool $signature;
    private ?bool $noNeighbor;
    private ?bool $insured;
    private ?string $incoterm;
    private ?string $route;
    private ?string $warehousezone;
    private ?string $batch;
    private ?string $note;
    private ?string $instructions;
    private ?string $printerchannel;
    private ?string $getdiscounts;

    /**
     * @param string $orderNumber
     * @param string $reference
     * @param string $language
     * @param string $currency
     * @param DateTime|null $firstPickUpDate
     * @param DateTime|null $firstPickUpDateTime
     * @param string|null $carrier
     * @param string|null $service
     * @param string|null $deliveryTimeFrom
     * @param string|null $deliveryTimeTo
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
    public function __construct(string $orderNumber, string $reference, string $language, string $currency, ?Date $firstPickUpDate, ?DateTime $firstPickUpDateTime, ?string $carrier, ?string $service, ?string $deliveryTimeFrom, ?string $deliveryTimeTo, ?bool $inbound, ?int $numPallets, ?bool $cod, ?bool $signature, ?bool $noNeighbor, ?bool $insured, ?string $incoterm, ?string $route, ?string $warehousezone, ?string $batch, ?string $note, ?string $instructions, ?string $printerchannel, ?string $getdiscounts)
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


}