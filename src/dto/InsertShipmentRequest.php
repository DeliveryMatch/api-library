<?php

namespace DeliveryMatchApiLibrary\dto;

class InsertShipmentRequest
{
    private Client $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }


}