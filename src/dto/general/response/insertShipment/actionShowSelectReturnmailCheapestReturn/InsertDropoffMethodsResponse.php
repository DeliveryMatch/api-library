<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

class InsertDropoffMethodsResponse
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