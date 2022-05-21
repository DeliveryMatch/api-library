<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\ClientResponse;
use DeliveryMatchApiLibrary\dto\general\response\CustomerResponse;
use DeliveryMatchApiLibrary\dto\general\response\GetShipmentMethodResponse;
use DeliveryMatchApiLibrary\dto\general\response\GetShipmentPackagesResponse;
use DeliveryMatchApiLibrary\dto\general\response\GetShipmentQuoteResponse;
use DeliveryMatchApiLibrary\dto\general\response\SenderResponse;
use DeliveryMatchApiLibrary\dto\general\response\ShipmentResponse;

class GetShipmentResponse
{
    public ClientResponse $client;
    public ShipmentResponse $shipment;
    public GetShipmentMethodResponse $shipmentMethod;
    public CustomerResponse $customer;
    public SenderResponse $sender;
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