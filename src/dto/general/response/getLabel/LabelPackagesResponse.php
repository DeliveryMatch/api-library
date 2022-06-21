<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getLabel;

class LabelPackagesResponse
{
    private int $sequence;
    private string $barcode;
    private string $ZPL;
    private string $labelURL;

    /**
     * @return int
     */
    public function getSequence(): int
    {
        return $this->sequence;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @return string
     */
    public function getZPL(): string
    {
        return $this->ZPL;
    }

    /**
     * @return string
     */
    public function getLabelURL(): string
    {
        return $this->labelURL;
    }
}