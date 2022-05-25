<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

use DateTime;

class PickupResponse
{
    public int $warehouse;
    public DateTime $pickupDate;
}