<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

use DateTime;

class GetShipmentMethodResponse
{
    private string $configurationID;
    private array $tariffID;
    private string $carrierName;
    private string $serviceLevel;
    private DateTime $datePickup;
    private DateTime $dateDelivery;
    private string $buy_price;
    private string $sell_price;
    private DateTime $timeFrom;
    private DateTime $timeTo;

    /**
     * @return string
     */
    public function getConfigurationID(): string
    {
        return $this->configurationID;
    }

    /**
     * @return array
     */
    public function getTariffID(): array
    {
        return $this->tariffID;
    }

    /**
     * @return string
     */
    public function getCarrierName(): string
    {
        return $this->carrierName;
    }

    /**
     * @return string
     */
    public function getServiceLevel(): string
    {
        return $this->serviceLevel;
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
    public function getDateDelivery(): DateTime
    {
        return $this->dateDelivery;
    }

    /**
     * @return string
     */
    public function getBuyPrice(): string
    {
        return $this->buy_price;
    }

    /**
     * @return string
     */
    public function getSellPrice(): string
    {
        return $this->sell_price;
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
}