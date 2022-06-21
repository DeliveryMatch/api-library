<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class ClientResponse
{
    private string $id;
    private string $channel;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }
}