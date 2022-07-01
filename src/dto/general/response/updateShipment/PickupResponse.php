<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

use DateTime;

class PickupResponse
{
    private int $warehouse;
    private DateTime $pickupDate;

    /**
     * @return int
     */
    public function getWarehouse(): int
    {
        return $this->warehouse;
    }

    /**
     * @return DateTime
     */
    public function getPickupDate(): DateTime
    {
        return $this->pickupDate;
    }
}