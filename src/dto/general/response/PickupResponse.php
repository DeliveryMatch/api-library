<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class PickupResponse
{
    public int $warehouse;
    public Date $pickupDate;
}