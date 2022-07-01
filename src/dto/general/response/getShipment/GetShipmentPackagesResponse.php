<?php

namespace DeliveryMatchApiLibrary\dto\general\response\getShipment;

class GetShipmentPackagesResponse
{
    /** @var GetShipmentPackageResponse[]  */
    private array $package;

    /**
     * @return GetShipmentPackageResponse[]
     */
    public function getPackage(): array
    {
        return $this->package;
    }
}