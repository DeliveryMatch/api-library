<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getServices;

class GetServicesServicesResponse
{
    private string $id;
    private string $carrier;
    private string $carrierID;
    private string $serviceID;
    private string $service;
    private string $description;

    /** @var GetServicesCountriesResponse[] */
    private array $countries;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @return string
     */
    public function getCarrierID(): string
    {
        return $this->carrierID;
    }

    /**
     * @return string
     */
    public function getServiceID(): string
    {
        return $this->serviceID;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return GetServicesCountriesResponse[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }
}