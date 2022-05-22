<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

use Cassandra\Date;

class PickupResponse
{
    public int $warehouse;
    public Date $pickupDate;
}