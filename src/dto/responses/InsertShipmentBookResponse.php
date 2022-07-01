<?php

namespace DeliveryMatchApiLibrary\dto\responses;

class InsertShipmentBookResponse
{
    public string $status;
    public int $code;
    public string $message;
    public string $shipmentID;
}