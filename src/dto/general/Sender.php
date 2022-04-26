<?php

namespace DeliveryMatchApiLibrary\dto\general;
use JetBrains\PhpStorm\Internal;

class Sender implements \JsonSerializable
{
    protected Address $address;
    protected Contact $contact;

    /**
     * @param Address $address
     * @param Contact $contact
     */
    public function __construct(Address $address, Contact $contact)
    {
        $this->address = $address;
        $this->contact = $contact;
    }

    /** @return Address */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /** @return Contact */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'address'   => $this->getAddress(),
            'contact' => $this->getContact(),
        ];
    }
}