<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\getUserActivity\UserActivitiesResponse;

class GetUserActivityResponse
{
    /** @var UserActivitiesResponse[] */
    public array $activities;
}