<?php

namespace DeliveryMatchApiLibrary\dto;

class DangerousGoods
{
    private ?string $technicalName;
    private ?string $shippingName;
    private ?string $mainDanger;
    private ?string $class;
    private ?string $subclass;
    private ?string $packingGroup;
    private ?int $UN;
    private ?int $UNP;
    private ?float $grossMass;
    private ?float $netMass;
    private ?string $massUnit;
    private ?bool $LQ;
    private ?string $NOS;
    private ?bool $environmentHazard;
    private ?string $tunnelCode;
    private ?string $classifactionCode;
    private ?string $packingType;
    private ?string $properties;
    private ?string $labels;
    private ?int $transportCategory;

    /**
     * @param string|null $technicalName
     * @param string|null $shippingName
     * @param string|null $mainDanger
     * @param string|null $class
     * @param string|null $subclass
     * @param string|null $packingGroup
     * @param int|null $UN
     * @param int|null $UNP
     * @param float|null $grossMass
     * @param float|null $netMass
     * @param string|null $massUnit
     * @param bool|null $LQ
     * @param string|null $NOS
     * @param bool|null $environmentHazard
     * @param string|null $tunnelCode
     * @param string|null $classifactionCode
     * @param string|null $packingType
     * @param string|null $properties
     * @param string|null $labels
     * @param int|null $transportCategory
     */
    public function __construct(?string $technicalName, ?string $shippingName, ?string $mainDanger, ?string $class, ?string $subclass, ?string $packingGroup, ?int $UN, ?int $UNP, ?float $grossMass, ?float $netMass, ?string $massUnit, ?bool $LQ, ?string $NOS, ?bool $environmentHazard, ?string $tunnelCode, ?string $classifactionCode, ?string $packingType, ?string $properties, ?string $labels, ?int $transportCategory)
    {
        $this->technicalName = $technicalName;
        $this->shippingName = $shippingName;
        $this->mainDanger = $mainDanger;
        $this->class = $class;
        $this->subclass = $subclass;
        $this->packingGroup = $packingGroup;
        $this->UN = $UN;
        $this->UNP = $UNP;
        $this->grossMass = $grossMass;
        $this->netMass = $netMass;
        $this->massUnit = $massUnit;
        $this->LQ = $LQ;
        $this->NOS = $NOS;
        $this->environmentHazard = $environmentHazard;
        $this->tunnelCode = $tunnelCode;
        $this->classifactionCode = $classifactionCode;
        $this->packingType = $packingType;
        $this->properties = $properties;
        $this->labels = $labels;
        $this->transportCategory = $transportCategory;
    }
}