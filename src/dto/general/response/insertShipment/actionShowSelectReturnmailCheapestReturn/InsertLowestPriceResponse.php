<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

use DateTime;

class InsertLowestPriceResponse
{
    private string $methodID;
    private InsertCarrierResponse $carrier;
    private InsertServiceLevelResponse $serviceLevel;
    private string $configurationID;
    private string $tariffID;
    private float $price;
    private float $buy_price;
    private string $description;
    private string $currency;
    private DateTime $dateDelivery;
    private DateTime $datePickup;
    private DateTime $timeFrom;
    private DateTime $timeTo;
    private string $title;
    private string $checkID;

    /**
     * @return string
     */
    public function getMethodID(): string
    {
        return $this->methodID;
    }

    /**
     * @return InsertCarrierResponse
     */
    public function getCarrier(): InsertCarrierResponse
    {
        return $this->carrier;
    }

    /**
     * @return InsertServiceLevelResponse
     */
    public function getServiceLevel(): InsertServiceLevelResponse
    {
        return $this->serviceLevel;
    }

    /**
     * @return string
     */
    public function getConfigurationID(): string
    {
        return $this->configurationID;
    }

    /**
     * @return string
     */
    public function getTariffID(): string
    {
        return $this->tariffID;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getBuyPrice(): float
    {
        return $this->buy_price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return DateTime
     */
    public function getDateDelivery(): DateTime
    {
        return $this->dateDelivery;
    }

    /**
     * @return DateTime
     */
    public function getDatePickup(): DateTime
    {
        return $this->datePickup;
    }

    /**
     * @return DateTime
     */
    public function getTimeFrom(): DateTime
    {
        return $this->timeFrom;
    }

    /**
     * @return DateTime
     */
    public function getTimeTo(): DateTime
    {
        return $this->timeTo;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getCheckID(): string
    {
        return $this->checkID;
    }

}