<?php

namespace DeliveryMatchApiLibrary\dto\requests;

class GetServicesRequest implements \JsonSerializable
{
    protected string $countryFrom;
    protected string $countryTo;

    /**
     * @param string $countryFrom
     * @param string $countryTo
     */
    public function __construct(string $countryFrom, string $countryTo)
    {
        $this->countryFrom = $countryFrom;
        $this->countryTo = $countryTo;
    }

    /** @return string */
    public function getCountryFrom(): string
    {
        return $this->countryFrom;
    }

    /** @return string */
    public function getCountryTo(): string
    {
        return $this->countryTo;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [
                "countryFrom" => $this->getCountryFrom(),
                "countryTo" => $this->getCountryTo()
            ];
    }
}