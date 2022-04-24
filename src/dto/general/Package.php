<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Package
{
    private ?string $warehouse;
    private string $description;
    private ?string $type;
    private float $weight;
    private float $length;
    private float $width;
    private float $height;

    /**
     * @param string|null $warehouse
     * @param string $description
     * @param string|null $type
     * @param float $weight
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(?string $warehouse, string $description, ?string $type, float $weight, float $length, float $width, float $height)
    {
        $this->warehouse = $warehouse;
        $this->description = $description;
        $this->type = $type;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }
}