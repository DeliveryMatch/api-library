<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getServices;

class GetServicesCountriesResponse
{
    private string $from;
    private string $to;

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
}