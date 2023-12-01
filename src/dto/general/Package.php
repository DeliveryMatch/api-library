<?php

namespace DeliveryMatchApiLibrary\dto\general;

class Package implements \JsonSerializable
{
    protected ?string $warehouse;
    protected string $description;
    protected ?string $type;
    protected float $weight;
    protected float $length;
    protected float $width;
    protected float $height;

    /**
     * @param string|null $warehouse
     * @param string $description
     * @param string|null $type
     * @param float $weight
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(?string $warehouse = null, string $description, ?string $type = null, float $weight, float $length, float $width, float $height)
    {
        $this->warehouse = $warehouse;
        $this->description = $description;
        $this->type = $type;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /** @return string|null */
    public function getWarehouse(): ?string
    {
        return $this->warehouse;
    }

    /** @return string */
    public function getDescription(): string
    {
        return $this->description;
    }

    /** @return string|null */
    public function getType(): ?string
    {
        return $this->type;
    }

    /** @return float */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /** @return float */
    public function getLength(): float
    {
        return $this->length;
    }

    /** @return float */
    public function getWidth(): float
    {
        return $this->width;
    }

    /** @return float */
    public function getHeight(): float
    {
        return $this->height;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'warehouse' => $this->getWarehouse(),
            'description' => $this->getDescription(),
            'type' => $this->getType(),
            'weight' => $this->getWeight(),
            'length' => $this->getLength(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
        ];
    }
}