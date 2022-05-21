<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use DateTime;

class UserActivitiesResponse
{
    public DateTime $date;
    public UserActivitiesResponse $shipment;
    public string $username ;
    public string $action ;
    public string $description;
}