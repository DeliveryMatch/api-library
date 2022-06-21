<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipments;

class InsertShipmentsMethodResponse
{
    private LowestPriceResponse $lowestPrice;

    /**
     * @return LowestPriceResponse
     */
    public function getLowestPrice(): LowestPriceResponse
    {
        return $this->lowestPrice;
    }
}