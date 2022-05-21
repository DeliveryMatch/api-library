<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class Pickup
{
    public int $warehouse;
    public Date $pickupDate;
}