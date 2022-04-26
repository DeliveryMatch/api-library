<?php

namespace DeliveryMatchApiLibrary\dto\general;
use DateTime;

class Product implements \JsonSerializable
{
    protected ?string $id;
    protected ?int $packageNum;
    protected ?int $warehouse;
    protected ?bool $transportlabel;
    protected ?string $location;
    protected ?string $description;
    protected ?string $content;
    protected ?string $SKU;
    protected ?string $hsCode;
    protected ?DangerousGoods $dangerousGoods;
    protected float $quantity;
    protected float $value;
    protected float $weight;
    protected float $length;
    protected float $width;
    protected ?bool $stock;
    protected ?DateTime $stockdate;
    protected ?WareHouse $warehouses;
    protected ?string $custom1;
    protected ?string $custom2;
    protected ?string $custom3;
    protected ?string $custom4;
    protected ?string $custom5;

    /**
     * @param string|null $id
     * @param int|null $packageNum
     * @param int|null $warehouse
     * @param bool|null $transportlabel
     * @param string|null $location
     * @param string|null $description
     * @param string|null $content
     * @param string|null $SKU
     * @param string|null $hsCode
     * @param DangerousGoods|null $dangerousGoods
     * @param float $quantity
     * @param float $value
     * @param float $weight
     * @param float $length
     * @param float $width
     * @param bool|null $stock
     * @param DateTime|null $stockdate
     * @param WareHouse|null $warehouses
     * @param string|null $custom1
     * @param string|null $custom2
     * @param string|null $custom3
     * @param string|null $custom4
     * @param string|null $custom5
     */
    public function __construct(?string $id, ?int $packageNum, ?int $warehouse, ?bool $transportlabel, ?string $location, ?string $description, ?string $content, ?string $SKU, ?string $hsCode, ?DangerousGoods $dangerousGoods, float $quantity, float $value, float $weight, float $length, float $width, ?bool $stock, ?DateTime $stockdate, ?WareHouse $warehouses, ?string $custom1, ?string $custom2, ?string $custom3, ?string $custom4, ?string $custom5)
    {
        $this->id = $id;
        $this->packageNum = $packageNum;
        $this->warehouse = $warehouse;
        $this->transportlabel = $transportlabel;
        $this->location = $location;
        $this->description = $description;
        $this->content = $content;
        $this->SKU = $SKU;
        $this->hsCode = $hsCode;
        $this->dangerousGoods = $dangerousGoods;
        $this->quantity = $quantity;
        $this->value = $value;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->stock = $stock;
        $this->stockdate = $stockdate;
        $this->warehouses = $warehouses;
        $this->custom1 = $custom1;
        $this->custom2 = $custom2;
        $this->custom3 = $custom3;
        $this->custom4 = $custom4;
        $this->custom5 = $custom5;
    }

    /** @return string|null */
    public function getId(): ?string
    {
        return $this->id;
    }

    /** @return int|null */
    public function getPackageNum(): ?int
    {
        return $this->packageNum;
    }

    /** @return int|null */
    public function getWarehouse(): ?int
    {
        return $this->warehouse;
    }

    /** @return bool|null */
    public function getTransportlabel(): ?bool
    {
        return $this->transportlabel;
    }

    /** @return string|null */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /** @return string|null */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /** @return string|null */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /** @return string|null */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }

    /** @return string|null */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }

    /** @return DangerousGoods|null */
    public function getDangerousGoods(): ?DangerousGoods
    {
        return $this->dangerousGoods;
    }

    /** @return float */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /** @return float */
    public function getValue(): float
    {
        return $this->value;
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

    /** @return bool|null */
    public function getStock(): ?bool
    {
        return $this->stock;
    }

    /** @return DateTime|null */
    public function getStockdate(): ?DateTime
    {
        return $this->stockdate;
    }

    /** @return WareHouse|null */
    public function getWarehouses(): ?WareHouse
    {
        return $this->warehouses;
    }

    /** @return string|null */
    public function getCustom1(): ?string
    {
        return $this->custom1;
    }

    /** @return string|null */
    public function getCustom2(): ?string
    {
        return $this->custom2;
    }

    /** @return string|null */
    public function getCustom3(): ?string
    {
        return $this->custom3;
    }

    /** @return string|null */
    public function getCustom4(): ?string
    {
        return $this->custom4;
    }

    /** @return string|null */
    public function getCustom5(): ?string
    {
        return $this->custom5;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'packageNum' => $this->getPackageNum(),
            'warehouse' => $this->getWarehouse(),
            'transportlabel' => $this->getTransportlabel(),
            'location' => $this->getLocation(),
            'description' => $this->getDescription(),
            'content' => $this->getContent(),
            'SKU' => $this->getSKU(),
            'hsCode' => $this->getHsCode(),
            'dangerousGoods' => $this->getDangerousGoods(),
            'quantity' => $this->getQuantity(),
            'value' => $this->getValue(),
            'weight' => $this->getWeight(),
            'length' => $this->getLength(),
            'width' => $this->getWidth(),
            'stock' => $this->getStock(),
            'stockdate' => $this->getStockdate(),
            'warehouses' => $this->getWarehouses(),
            'custom1' => $this->getCustom1(),
            'custom2' => $this->getCustom2(),
            'custom3' => $this->getCustom3(),
            'custom4' => $this->getCustom4(),
            'custom5' => $this->getCustom5(),
        ];
    }
}