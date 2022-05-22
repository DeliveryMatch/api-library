<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\getLocations\LocationDropoffMethodsResponse;

class GetLocationsResponse
{
    public string $status;
    public int $code;
    public string $message;
    public string $shipmentID;
    public LocationDropoffMethodsResponse $dropoffMethods;
}