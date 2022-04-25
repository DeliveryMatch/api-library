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
    private Client $client;
    private Shipment $shipment;
    private ?Sender $sender;
    private Customer $customer;
    private ?Package $packages;
    private Quote $quote;
    private ?bool $fragileGoods;
    private ?bool $dangerousGoods;
    private float $priceIncl;
    private ?float $priceExcl;
    private float $weight;

    /**
     * @param Client $client
     * @param Shipment $shipment
     * @param Sender|null $sender
     * @param Customer $customer
     * @param Package|null $packages
     * @param Quote $quote
     * @param bool|null $fragileGoods
     * @param bool|null $dangerousGoods
     * @param float $priceIncl
     * @param float|null $priceExcl
     * @param float $weight
     */
    public function __construct(Client $client, Shipment $shipment, ?Sender $sender, Customer $customer, ?Package $packages, Quote $quote, ?bool $fragileGoods, ?bool $dangerousGoods, float $priceIncl, ?float $priceExcl, float $weight)
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
}