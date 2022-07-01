<?php

namespace DeliveryMatchApiLibrary\dto\responses;

class InsertShipmentSaveResponse
{
    public string $status;
    public string $code;
    public string $message;
    public string $shipmentID;
    public string $packages;
    public string $shipmentMethods;
}