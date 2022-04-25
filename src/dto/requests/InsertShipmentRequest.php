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

class InsertShipmentRequest
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

    /**
     * @param array $insertshipment
     */
    public function __construct(array $insertshipment)
    {
        $this->client = $insertshipment['client'];
        $this->shipment = $insertshipment['shipment'];
        $this->sender = $insertshipment['sender'];
        $this->customer = $insertshipment['customer'];
        $this->packages = $insertshipment['packages'];
        $this->quote = $insertshipment['quote'];
        $this->fragileGoods = $insertshipment['fragileGoods'];
        $this->dangerousGoods = $insertshipment['dangerousGoods'];
        $this->priceIncl = $insertshipment['priceIncl'];
        $this->priceExcl = $insertshipment['priceExcl'];
        $this->weight = $insertshipment['weight'];
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return Shipment
     */
    public function getShipment(): Shipment
    {
        return $this->shipment;
    }

    /**
     * @return Sender|null
     */
    public function getSender(): Sender|null
    {
        return $this->sender;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return Packages|null
     */
    public function getPackages(): Packages|null
    {
        return $this->packages;
    }

    /**
     * @return Quote
     */
    public function getQuote(): Quote
    {
        return $this->quote;
    }

    /**
     * @return bool|null
     */
    public function getFragileGoods(): bool|null
    {
        return $this->fragileGoods;
    }

    /**
     * @return bool|null
     */
    public function getDangerousGoods(): bool|null
    {
        return $this->dangerousGoods;
    }

    /**
     * @return float
     */
    public function getPriceIncl(): float
    {
        return $this->priceIncl;
    }

    /**
     * @return float|null
     */
    public function getPriceExcl(): float|null
    {
        return $this->priceExcl;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return array
     */
    #[ArrayShape(['client' => "Client",
        'shipment' => "Shipment",
        'sender' => "Sender|null",
        'customer' => "Customer",
        'packages' => "Packages|null",
        'quote' => "Quote",
        'fragileGoods' => "bool|null",
        'dangerousGoods' => "bool|null",
        'princeIncl' => "float",
        'priceExcl' => "float|null",
        'weight' => "float"])]
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