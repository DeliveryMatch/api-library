<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class CustomerResponse
{
    private CustomerAddressResponse $address;
    private ContactResponse $contact;

    /**
     * @return CustomerAddressResponse
     */
    public function getAddress(): CustomerAddressResponse
    {
        return $this->address;
    }

    /**
     * @return ContactResponse
     */
    public function getContact(): ContactResponse
    {
        return $this->contact;
    }
}