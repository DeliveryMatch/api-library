<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class GetShipmentQuoteResponse
{
    /** @var GetShipmentProductResponse[]  */
    private array $product;

    /**
     * @return GetShipmentProductResponse[]
     */
    public function getProduct(): array
    {
        return $this->product;
    }
}