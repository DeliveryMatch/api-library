<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

class InsertShipmentMethodResponse
{
    private string $url;
    private InsertLowestPriceResponse $lowestPrice;
    private InsertEarliestResponse $earliest;

    /** @var InsertAllResponse[] */
    private array $all;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return InsertLowestPriceResponse
     */
    public function getLowestPrice(): InsertLowestPriceResponse
    {
        return $this->lowestPrice;
    }

    /**
     * @return InsertEarliestResponse
     */
    public function getEarliest(): InsertEarliestResponse
    {
        return $this->earliest;
    }

    /**
     * @return InsertAllResponse[]
     */
    public function getAll(): array
    {
        return $this->all;
    }
}