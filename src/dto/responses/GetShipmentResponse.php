<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\getShipment\ClientResponse;
use DeliveryMatchApiLibrary\dto\general\response\getShipment\CustomerResponse;
use DeliveryMatchApiLibrary\dto\general\response\getShipment\GetShipmentMethodResponse;
use DeliveryMatchApiLibrary\dto\general\response\getShipment\GetShipmentPackagesResponse;
use DeliveryMatchApiLibrary\dto\general\response\getShipment\GetShipmentQuoteResponse;
use DeliveryMatchApiLibrary\dto\general\response\getShipment\SenderResponse;
use DeliveryMatchApiLibrary\dto\general\response\getShipment\ShipmentResponse;

class GetShipmentResponse
{
    public ClientResponse $client;
    public ShipmentResponse $shipment;
    public GetShipmentMethodResponse $shipmentMethod;
    public CustomerResponse $customer;
    public SenderResponse $sender;

    /** @var string[] */
    public array $barcodes;
    public GetShipmentPackagesResponse $packages;
    public GetShipmentQuoteResponse $quote;
    public bool $fragileGoods;
    public bool $dangerousGoods;
    public string $priceIncl;
    public string $weight;
    public int $colli;
    public int $code;
    public string $status;
}