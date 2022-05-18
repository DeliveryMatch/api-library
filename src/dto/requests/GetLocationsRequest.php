<?php

namespace DeliveryMatchApiLibrary\dto\requests;

class GetLocationsRequest implements \JsonSerializable
{
    protected int $id;
    protected string $orderNumber;
    protected string $address1;
    protected string $city;
    protected string $country;

    /**
     * @param int $id
     * @param string $orderNumber
     * @param string $address1
     * @param string $city
     * @param string $country
     */
    public function __construct(int $id, string $orderNumber, string $address1, string $city, string $country)
    {
        $this->id = $id;
        $this->orderNumber = $orderNumber;
        $this->address1 = $address1;
        $this->city = $city;
        $this->country = $country;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /** @return string */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /** @return string */
    public function getAddress1(): string
    {
        return $this->address1;
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

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [ "shipment" =>
                [
                    'id' => $this->getId(),
                    'orderNumber' => $this->getorderNumber()
                ],
              "address" =>
                [
                    "address1" => $this->getAddress1(),
                    "city" => $this->getCity(),
                    "country" => $this->getCountry(),
                ]
            ];
    }
}