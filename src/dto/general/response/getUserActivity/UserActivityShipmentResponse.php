<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getUserActivity;

class UserActivityShipmentResponse
{
    private int $id;
    private string $orderNumber;

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
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }
}