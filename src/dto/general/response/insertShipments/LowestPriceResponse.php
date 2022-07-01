<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipments;

class LowestPriceResponse
{
    private string $description;
    private string $title;

    /** @return string */
    public function getDescription(): string
    {
        return $this->description;
    }

    /** @return string */
    public function getTitle(): string
    {
        return $this->title;
    }
}