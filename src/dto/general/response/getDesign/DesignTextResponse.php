<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getDesign;

class DesignTextResponse
{
    private string $shipment_title;
    private string $dropoff_title;
    private string $pickup_title;
    private string $text_location;
    private string $button_location;
    private string $description_NL;
    private string $description_EN;
    private string $description_DE;
    private string $description_FR;
    private string $description_ES;
    private string $description_IT;

    /**
     * @return string
     */
    public function getShipmentTitle(): string
    {
        return $this->shipment_title;
    }

    /**
     * @return string
     */
    public function getDropoffTitle(): string
    {
        return $this->dropoff_title;
    }

    /**
     * @return string
     */
    public function getPickupTitle(): string
    {
        return $this->pickup_title;
    }

    /**
     * @return string
     */
    public function getTextLocation(): string
    {
        return $this->text_location;
    }

    /**
     * @return string
     */
    public function getButtonLocation(): string
    {
        return $this->button_location;
    }

    /**
     * @return string
     */
    public function getDescriptionNL(): string
    {
        return $this->description_NL;
    }

    /**
     * @return string
     */
    public function getDescriptionEN(): string
    {
        return $this->description_EN;
    }

    /**
     * @return string
     */
    public function getDescriptionDE(): string
    {
        return $this->description_DE;
    }

    /**
     * @return string
     */
    public function getDescriptionFR(): string
    {
        return $this->description_FR;
    }

    /**
     * @return string
     */
    public function getDescriptionES(): string
    {
        return $this->description_ES;
    }

    /**
     * @return string
     */
    public function getDescriptionIT(): string
    {
        return $this->description_IT;
    }


}