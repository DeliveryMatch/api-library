<?php

namespace DeliveryMatchApiLibrary\dto\general\response;

use Cassandra\Date;

class SenderAddressResponse
{
    public string $name;
    public string$companyName;
    public Date $address1;
    public string $address2;
    public string $postcode;
    public string $city;
    public string $country;
}