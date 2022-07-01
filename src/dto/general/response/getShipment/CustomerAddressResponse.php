<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class CustomerAddressResponse
{
    private string $name;
    private string $address1;
    private string $address2;
    private string $street;
    private string $houseNr;
    private string $houseNrExt;
    private string $postcode;
    private string $city;
    private string $country;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getHouseNr(): string
    {
        return $this->houseNr;
    }

    /**
     * @return string
     */
    public function getHouseNrExt(): string
    {
        return $this->houseNrExt;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}