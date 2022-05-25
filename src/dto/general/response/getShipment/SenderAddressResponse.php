<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

use Cassandra\Date;

class SenderAddressResponse
{
    public string $name;
    public string$companyName;
    public string $address1;
    public string $address2;
    public string $postcode;
    public string $city;
    public string $country;
}