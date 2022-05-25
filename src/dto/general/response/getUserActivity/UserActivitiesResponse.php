<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getUserActivity;

use DateTime;

class UserActivitiesResponse
{
    public string $date;
    public UserActivitiesResponse $shipment;
    public string $username ;
    public string $action ;
    public string $description;
}