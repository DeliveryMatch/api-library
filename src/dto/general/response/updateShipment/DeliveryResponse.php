<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

use DateTime;

class DeliveryResponse
{
    private DateTime $deliveryDate;
    private DateTime $timeFrom;
    private DateTime $timeTo;
    private string $carrier;
    private string $serviceLevel;
    private string $barcode;
    private string $trackingURL;

    /**
     * @return DateTime
     */
    public function getDeliveryDate(): DateTime
    {
        return $this->deliveryDate;
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
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @return string
     */
    public function getServiceLevel(): string
    {
        return $this->serviceLevel;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @return string
     */
    public function getTrackingURL(): string
    {
        return $this->trackingURL;
    }
}