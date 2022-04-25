<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DeliveryMatchApiLibrary\dto\general\Client;
use DeliveryMatchApiLibrary\dto\general\Customer;
use DeliveryMatchApiLibrary\dto\general\Packages;
use DeliveryMatchApiLibrary\dto\general\Quote;
use DeliveryMatchApiLibrary\dto\general\Sender;
use DeliveryMatchApiLibrary\dto\general\Shipment;
use DeliveryMatchApiLibrary\dto\general\updates\ShipmentUpdate;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Internal;

class UpdateShipmentRequest extends InsertShipmentRequest implements \JsonSerializable
{
    protected Client $client;
    protected Shipment|ShipmentUpdate $shipment;
    protected ?Sender $sender;
    protected ?Customer $customer;
    protected ?Packages $packages;
    protected ?Quote $quote;
    protected ?bool $fragileGoods;
    protected ?bool $dangerousGoods;
    protected ?float $priceIncl;
    protected ?float $priceExcl;
    protected ?float $weight;

    public function __construct(array $insertshipment)
    {
        parent::__construct($insertshipment);
    }


    /** @return Client */
    public function getClient(): Client
    {
        return $this->client;
    }

    /** @return ShipmentUpdate */
    public function getShipmentUpdate(): ShipmentUpdate
    {
        return $this->shipment;
    }

    /** @return Sender|null */
    public function getSender(): ?Sender
    {
        return $this->sender;
    }

    /** @return Customer|null */
    public function getCustomerUpdate(): ?Customer
    {
        return $this->customer;
    }

    /** @return Packages|null */
    public function getPackages(): ?Packages
    {
        return $this->packages;
    }

    /** @return Quote|null */
    public function getQuoteUpdate(): ?Quote
    {
        return $this->quote;
    }

    /** @return bool|null */
    public function getFragileGoods(): ?bool
    {
        return $this->fragileGoods;
    }

    /** @return bool|null */
    public function getDangerousGoods(): ?bool
    {
        return $this->dangerousGoods;
    }

    /** @return float|null */
    public function getPriceInclUpdate(): ?float
    {
        return $this->priceIncl;
    }

    /** @return float|null */
    public function getPriceExcl(): ?float
    {
        return $this->priceExcl;
    }

    /** @return float|null */
    public function getWeightUpdate(): ?float
    {
        return $this->weight;
    }

    /**
     * @return array
     */
    #[ArrayShape(['client' => "Client",
        'shipment' => "ShipmentUpdate",
        'sender' => "Sender|null",
        'customer' => "Customer|null",
        'packages' => "Packages|null",
        'quote' => "Quote|null",
        'fragileGoods' => "bool|null",
        'dangerousGoods' => "bool|null",
        'princeIncl' => "float|null",
        'priceExcl' => "float|null",
        'weight' => "float|null"])]
    public function jsonSerialize(): array
    {
        return [
            'client'   => $this->getClient(),
            'shipment' => $this->getShipmentUpdate(),
            'sender' => $this->getSender(),
            'customer' => $this->getCustomerUpdate(),
            'packages' => $this->getPackages(),
            'quote' => $this->getQuoteUpdate(),
            'fragileGoods' => $this->getFragileGoods(),
            'dangerousGoods' => $this->getDangerousGoods(),
            'princeIncl' => $this->getPriceInclUpdate(),
            'priceExcl' => $this->getPriceExcl(),
            'weight' => $this->getWeightUpdate(),
        ];
    }
}