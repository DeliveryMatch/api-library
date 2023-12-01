<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Address implements \JsonSerializable
{
    protected string $name;
    protected ?string $companyName;
    protected string $address1;
    protected ?string $address2;
    protected ?string $street;
    protected ?string $houseNr;
    protected ?string $houseNrExt;
    protected string $postcode;
    protected string $city;
    protected string $country;
    protected ?string $state;
    protected ?string $zone;

    /**
     * @param string $name
     * @param string|null $companyName
     * @param string $address1
     * @param string|null $address2
     * @param string|null $street
     * @param string|null $houseNr
     * @param string|null $houseNrExt
     * @param string $postcode
     * @param string $city
     * @param string $country
     * @param string|null $state
     * @param string|null $zone
     */
    public function __construct(string $name, ?string $companyName = null, string $address1, ?string $address2 = null, ?string $street, ?string $houseNr, ?string $houseNrExt = null, string $postcode, string $city, string $country, ?string $state = null, ?string $zone = null)
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

    /** @return string */
    public function getName(): string
    {
        return $this->name;
    }

    /** @return string|null */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /** @return string */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /** @return string|null */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /** @return string */
    public function getStreet(): string
    {
        return $this->street;
    }

    /** @return string */
    public function getHouseNr(): string
    {
        return $this->houseNr;
    }

    /** @return string|null */
    public function getHouseNrExt(): ?string
    {
        return $this->houseNrExt;
    }

    /** @return string */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /** @return string */
    public function getCity(): string
    {
        return $this->city;
    }

    /** @return string */
    public function getCountry(): string
    {
        return $this->country;
    }

    /** @return string|null */
    public function getState(): ?string
    {
        return $this->state;
    }

    /** @return string|null */
    public function getZone(): ?string
    {
        return $this->zone;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
            'companyName' => $this->getCompanyName(),
            'address1' => $this->getAddress1(),
            'address2' => $this->getAddress2(),
            'street' => $this->getStreet(),
            'houseNr' => $this->getHouseNr(),
            'houseNrExt' => $this->getHouseNrExt(),
            'postcode' => $this->getPostcode(),
            'city' => $this->getCity(),
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'zone' => $this->getZone(),
        ];
    }
}