<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DeliveryMatchApiLibrary\dto\general\Client;
use DeliveryMatchApiLibrary\dto\general\Customer;
use DeliveryMatchApiLibrary\dto\general\Packages;
use DeliveryMatchApiLibrary\dto\general\Quote;
use DeliveryMatchApiLibrary\dto\general\Sender;
use DeliveryMatchApiLibrary\dto\general\updates\ShipmentUpdate;
use JetBrains\PhpStorm\Internal;

class UpdateShipmentRequest implements \JsonSerializable
{
    protected Client $client;
    protected ShipmentUpdate $shipment;
    protected ?Sender $sender;
    protected ?Customer $customer;
    protected ?Packages $packages;
    protected ?Quote $quote;
    protected ?bool $fragileGoods;
    protected ?bool $dangerousGoods;
    protected ?float $priceIncl;
    protected ?float $priceExcl;
    protected ?float $weight;

    /**
     * @param Client $client
     * @param ShipmentUpdate $shipment
     * @param Sender|null $sender
     * @param Customer|null $customer
     * @param Packages|null $packages
     * @param Quote|null $quote
     * @param bool|null $fragileGoods
     * @param bool|null $dangerousGoods
     * @param float|null $priceIncl
     * @param float|null $priceExcl
     * @param float|null $weight
     */
    public function __construct(Client $client, ShipmentUpdate $shipment, ?Sender $sender = null, ?Customer $customer = null, ?Packages $packages = null, ?Quote $quote = null, ?bool $fragileGoods = null, ?bool $dangerousGoods = null, ?float $priceIncl = null, ?float $priceExcl = null, ?float $weight = null)
    {
        $this->client = $client;
        $this->shipment = $shipment;
        $this->sender = $sender;
        $this->customer = $customer;
        $this->packages = $packages;
        $this->quote = $quote;
        $this->fragileGoods = $fragileGoods;
        $this->dangerousGoods = $dangerousGoods;
        $this->priceIncl = $priceIncl;
        $this->priceExcl = $priceExcl;
        $this->weight = $weight;
    }

    /** @return Client */
    public function getClient(): Client
    {
        return $this->client;
    }

    /** @return ShipmentUpdate */
    public function getShipment(): ShipmentUpdate
    {
        return $this->shipment;
    }

    /** @return Sender|null */
    public function getSender(): ?Sender
    {
        return $this->sender;
    }

    /** @return Customer|null */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /** @return Packages|null */
    public function getPackages(): ?Packages
    {
        return $this->packages;
    }

    /** @return Quote|null */
    public function getQuote(): ?Quote
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
    public function getPriceIncl(): ?float
    {
        return $this->priceIncl;
    }

    /** @return float|null */
    public function getPriceExcl(): ?float
    {
        return $this->priceExcl;
    }

    /** @return float|null */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'client'   => $this->getClient(),
            'shipment' => $this->getShipment(),
            'sender' => $this->getSender(),
            'customer' => $this->getCustomer(),
            'packages' => $this->getPackages(),
            'quote' => $this->getQuote(),
            'fragileGoods' => $this->getFragileGoods(),
            'dangerousGoods' => $this->getDangerousGoods(),
            'princeIncl' => $this->getPriceIncl(),
            'priceExcl' => $this->getPriceExcl(),
            'weight' => $this->getWeight(),
        ];
    }

    /**
     * @param UpdateShipmentRequest $otherRequest
     * @return bool
     */
    public function isDifferentThan(UpdateShipmentRequest $otherRequest): bool
    {
        return (json_encode($this->jsonSerialize()) != json_encode($otherRequest->jsonSerialize()));
    }
}