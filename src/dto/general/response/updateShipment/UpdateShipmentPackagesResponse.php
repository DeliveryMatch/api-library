<?php

namespace DeliveryMatchApiLibrary\dto\general\response\updateShipment;

class UpdateShipmentPackagesResponse
{
    private string $barcode;
    private string $ZPL;
    private string $labelURL;

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