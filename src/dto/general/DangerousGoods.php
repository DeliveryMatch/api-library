<?php

namespace DeliveryMatchApiLibrary\dto\general;

class DangerousGoods implements \JsonSerializable
{
    protected ?string $technicalName;
    protected ?string $shippingName;
    protected ?string $mainDanger;
    protected ?string $class;
    protected ?string $subclass;
    protected ?string $packingGroup;
    protected ?int $UN;
    protected ?int $UNP;
    protected ?float $grossMass;
    protected ?float $netMass;
    protected ?string $massUnit;
    protected ?bool $LQ;
    protected ?string $NOS;
    protected ?bool $environmentHazard;
    protected ?string $tunnelCode;
    protected ?string $classifactionCode;
    protected ?string $packingType;
    protected ?string $properties;
    protected ?string $labels;
    protected ?int $transportCategory;

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

    /** @return string|null */
    public function getTechnicalName(): ?string
    {
        return $this->technicalName;
    }

    /** @return string|null */
    public function getShippingName(): ?string
    {
        return $this->shippingName;
    }

    /** @return string|null */
    public function getMainDanger(): ?string
    {
        return $this->mainDanger;
    }

    /** @return string|null */
    public function getClass(): ?string
    {
        return $this->class;
    }

    /** @return string|null */
    public function getSubclass(): ?string
    {
        return $this->subclass;
    }

    /** @return string|null */
    public function getPackingGroup(): ?string
    {
        return $this->packingGroup;
    }

    /** @return int|null */
    public function getUN(): ?int
    {
        return $this->UN;
    }

    /** @return int|null */
    public function getUNP(): ?int
    {
        return $this->UNP;
    }

    /** @return float|null */
    public function getGrossMass(): ?float
    {
        return $this->grossMass;
    }

    /** @return float|null */
    public function getNetMass(): ?float
    {
        return $this->netMass;
    }

    /** @return string|null */
    public function getMassUnit(): ?string
    {
        return $this->massUnit;
    }

    /** @return bool|null */
    public function getLQ(): ?bool
    {
        return $this->LQ;
    }

    /** @return string|null */
    public function getNOS(): ?string
    {
        return $this->NOS;
    }

    /** @return bool|null */
    public function getEnvironmentHazard(): ?bool
    {
        return $this->environmentHazard;
    }

    /** @return string|null */
    public function getTunnelCode(): ?string
    {
        return $this->tunnelCode;
    }

    /** @return string|null */
    public function getClassifactionCode(): ?string
    {
        return $this->classifactionCode;
    }

    /** @return string|null */
    public function getPackingType(): ?string
    {
        return $this->packingType;
    }

    /** @return string|null */
    public function getProperties(): ?string
    {
        return $this->properties;
    }

    /** @return string|null */
    public function getLabels(): ?string
    {
        return $this->labels;
    }

    /** @return int|null */
    public function getTransportCategory(): ?int
    {
        return $this->transportCategory;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'technicalName' => $this->getTechnicalName(),
            'shippingName' => $this->getShippingName(),
            'mainDanger' => $this->getMainDanger(),
            'class' => $this->getClass(),
            'subclass' => $this->getSubclass(),
            'packingGroup' => $this->getPackingGroup(),
            'UN' => $this->getUN(),
            'UNP' => $this->getUNP(),
            'grossMass' => $this->getGrossMass(),
            'netMass' => $this->getNetMass(),
            'massUnit' => $this->getMassUnit(),
            'LQ' => $this->getLQ(),
            'NOS' => $this->getNOS(),
            'environmentHazard' => $this->getEnvironmentHazard(),
            'tunnelCode' => $this->getTunnelCode(),
            'classifactionCode' => $this->getClassifactionCode(),
            'packingType' => $this->getPackingType(),
            'properties' => $this->getProperties(),
            'labels' => $this->getLabels(),
            'transportCategory' => $this->getTransportCategory(),
        ];
    }
}