<?php

namespace DeliveryMatchApiLibrary\dto;

class Customer
{
    private ?string $id;
    private Address $address;
    private ?Address $billing;
    private ?Contact $contact;

    /**
     * @param string|null $id
     * @param Address $address
     * @param Address|null $billing
     * @param Contact|null $contact
     */
    public function __construct(?string $id, Address $address, ?Address $billing, ?Contact $contact)
    {
        $this->id = $id;
        $this->address = $address;
        $this->billing = $billing;
        $this->contact = $contact;
    }
}