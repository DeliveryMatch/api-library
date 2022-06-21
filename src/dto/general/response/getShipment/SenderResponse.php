<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class SenderResponse
{
    private SenderAddressResponse $address;

    /**
     * @return SenderAddressResponse
     */
    public function getAddress(): SenderAddressResponse
    {
        return $this->address;
    }
}