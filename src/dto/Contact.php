<?php

namespace DeliveryMatchApiLibrary\dto;

class Contact
{
    private string $phoneNumber;
    private string $email;

    /**
     * @param string $phoneNumber
     * @param string $email
     */
    public function __construct(string $phoneNumber, string $email)
    {
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }
}