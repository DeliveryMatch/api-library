<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getLocations;

class LocationDropoffMethodsResponse
{
    private string $url;
    private array $locations;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return array
     */
    public function getLocations(): array
    {
        return $this->locations;
    }
}