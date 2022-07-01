<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

class InsertCarrierResponse
{
    private int $id;
    private string $name;
    private string $code;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}