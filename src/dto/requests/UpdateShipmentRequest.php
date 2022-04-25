<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DeliveryMatchApiLibrary\dto\general\Client;
use DeliveryMatchApiLibrary\dto\general\Customer;
use DeliveryMatchApiLibrary\dto\general\Sender;
use DeliveryMatchApiLibrary\dto\general\updates\ShipmentUpdate;

class UpdateShipmentRequest
{
    private Client $client;
    private ShipmentUpdate $shipment;
    private ?Sender $sender;
    private ?Customer $customer;

    /**
     * @param Client|null $client
     * @param ShipmentUpdate $shipment
     * @param Sender|null $sender
     * @param Customer|null $customer
     */
    public function __construct(Client $client, ShipmentUpdate $shipment, ?Sender $sender, ?Customer $customer)
    {
        $this->client = $client;
        $this->shipment = $shipment;
        $this->sender = $sender;
        $this->customer = $customer;
    }
}