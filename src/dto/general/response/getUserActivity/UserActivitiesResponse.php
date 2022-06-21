<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getUserActivity;

use DateTime;

class UserActivitiesResponse
{
    private DateTime $date;
    private UserActivitiesResponse $shipment;
    private string $username;
    private string $action;
    private string $description;

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return UserActivitiesResponse
     */
    public function getShipment(): UserActivitiesResponse
    {
        return $this->shipment;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}