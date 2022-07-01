<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Contact implements \JsonSerializable
{
    protected string $phoneNumber;
    protected string $email;

    /**
     * @param string $phoneNumber
     * @param string $email
     */
    public function __construct(string $phoneNumber, string $email)
    {
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

    /** @return string */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /** @return string */
    public function getEmail(): string
    {
        return $this->email;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [
                "phoneNumber" => $this->getPhoneNumber(),
                "email" => $this->getEmail()
            ];
    }
}