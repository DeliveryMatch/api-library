<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Address
{
    private string $name;
    private ?string $companyName;
    private string $address1;
    private ?string $address2;
    private string $street;
    private string $houseNr;
    private ?string $houseNrExt;
    private string $postcode;
    private string $city;
    private string $country;
    private ?string $state;
    private ?string $zone;

    /**
     * @param string $name
     * @param string|null $companyName
     * @param string $address1
     * @param string|null $address2
     * @param string $street
     * @param string $houseNr
     * @param string|null $houseNrExt
     * @param string $postcode
     * @param string $city
     * @param string $country
     * @param string|null $state
     * @param string|null $zone
     */
    public function __construct(string $name, ?string $companyName, string $address1, ?string $address2, string $street, string $houseNr, ?string $houseNrExt, string $postcode, string $city, string $country, ?string $state, ?string $zone)
    {
        $this->name = $name;
        $this->companyName = $companyName;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->street = $street;
        $this->houseNr = $houseNr;
        $this->houseNrExt = $houseNrExt;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->country = $country;
        $this->state = $state;
        $this->zone = $zone;
    }
}