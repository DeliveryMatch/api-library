<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class GetShipmentPackageResponse
{
    private string $id;
    private string $warehouse;
    private string $description;
    private string $length;
    private string $width;
    private string $height;
    private string $weight;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getWarehouse(): string
    {
        return $this->warehouse;
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
    public function getLength(): string
    {
        return $this->length;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }
}