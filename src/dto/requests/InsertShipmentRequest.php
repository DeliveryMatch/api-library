<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DeliveryMatchApiLibrary\dto\general\Client;
use DeliveryMatchApiLibrary\dto\general\Customer;
use DeliveryMatchApiLibrary\dto\general\Packages;
use DeliveryMatchApiLibrary\dto\general\Quote;
use DeliveryMatchApiLibrary\dto\general\Sender;
use DeliveryMatchApiLibrary\dto\general\Shipment;

class InsertShipmentRequest
{
    protected Client $client;
    protected Shipment $shipment;
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
     * @param Shipment $shipment
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
    public function __construct(Client $client, Shipment $shipment, ?Sender $sender, ?Customer $customer, ?Packages $packages, ?Quote $quote, ?bool $fragileGoods, ?bool $dangerousGoods, ?float $priceIncl, ?float $priceExcl, ?float $weight)
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
    public function getClient()
    {
        return $this->client;
    }

    /** @return Shipment */
    public function getShipment()
    {
        return $this->shipment;
    }

    /** @return Sender|null */
    public function getSender()
    {
        return $this->sender;
    }

    /** @return Customer|null */
    public function getCustomer()
    {
        return $this->customer;
    }

    /** @return Packages|null */
    public function getPackages()
    {
        return $this->packages;
    }

    /** @return Quote|null */
    public function getQuote()
    {
        return $this->quote;
    }

    /** @return bool|null */
    public function getFragileGoods()
    {
        return $this->fragileGoods;
    }

    /** @return bool|null */
    public function getDangerousGoods()
    {
        return $this->dangerousGoods;
    }

    /** @return float|null */
    public function getPriceIncl()
    {
        return $this->priceIncl;
    }

    /** @return float|null */
    public function getPriceExcl()
    {
        return $this->priceExcl;
    }

    /** @return float|null */
    public function getWeight()
    {
        return $this->weight;
    }

    /** @return array */
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
}