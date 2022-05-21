<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

class GetServicesServicesResponse
{
    public string $id; //String
    public string $carrier; //String
    public string $carrierID; //String
    public string $serviceID; //String
    public string $service; //String
    public string $description; //String

    /** @var GetServicesCountriesResponse[] */
    public array $countries; //array( Countries )
}