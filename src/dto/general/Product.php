<?php

namespace DeliveryMatchApiLibrary\dto\general;
use DateTime;

class Product
{
    private ?string $id;
    private ?int $packageNum;
    private ?int $warehouse;
    private ?bool $transportlabel;
    private ?string $location;
    private ?string $description;
    private ?string $content;
    private ?string $SKU;
    private ?string $hsCode;
    private ?DangerousGoods $dangerousGoods;
    private float $quantity;
    private float $value;
    private float $weight;
    private float $length;
    private float $width;
    private ?bool $stock;
    private ?DateTime $stockdate;
    private ?WareHouse $warehouses;
    private ?string $custom1;
    private ?string $custom2;
    private ?string $custom3;
    private ?string $custom4;
    private ?string $custom5;

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
}