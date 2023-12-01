<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Customer implements \JsonSerializable
{
    protected ?string $id;
    protected Address $address;
    protected ?Address $billing;
    protected ?Contact $contact;

    /**
     * @param string|null $id
     * @param Address $address
     * @param Address|null $billing
     * @param Contact|null $contact
     */
    public function __construct(?string $id = null, Address $address, ?Address $billing = null, ?Contact $contact = null)
    {
        $this->id = $id;
        $this->address = $address;
        $this->billing = $billing;
        $this->contact = $contact;
    }

    /** @return string|null */
    public function getId(): ?string
    {
        return $this->id;
    }

    /** @return Address */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /** @return Address|null */
    public function getBilling(): ?Address
    {
        return $this->billing;
    }

    /** @return Contact|null */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'id'   => $this->getId(),
            'address' => $this->getAddress(),
            'billing' => $this->getBilling(),
            'contact' => $this->getContact(),
        ];
    }
}