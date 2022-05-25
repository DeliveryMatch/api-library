<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getServices;

class GetServicesServicesResponse
{
    public string $id;
    public string $carrier;
    public string $carrierID;
    public string $serviceID;
    public string $service;
    public string $description;

    /** @var GetServicesCountriesResponse[] */
    public array $countries;
}