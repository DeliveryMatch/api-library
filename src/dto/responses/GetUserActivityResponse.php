<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\UserActivitiesResponse;

class GetUserActivityResponse
{
    /** @var UserActivitiesResponse[] */
    public array $activities;
}