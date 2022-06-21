<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipments;

class ItemsResponse
{
    private string $warehouse;
    private string $description;
    private string $content;
    private string $quantity;
    private string $value;
    private string $length;
    private string $width;
    private string $height;
    private string $weight;
    private string $SKU;
    private array $EAN;

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
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
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

    /**
     * @return string
     */
    public function getSKU(): string
    {
        return $this->SKU;
    }

    /**
     * @return array
     */
    public function getEAN(): array
    {
        return $this->EAN;
    }
}