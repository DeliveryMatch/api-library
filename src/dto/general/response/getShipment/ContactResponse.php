<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class ContactResponse
{
    private string $phoneNumber;
    private string $email;

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}