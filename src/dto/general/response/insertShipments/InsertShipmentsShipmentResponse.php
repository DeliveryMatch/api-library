<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipments;

class InsertShipmentsShipmentResponse
{
    private int $location;
    /** @var ItemsResponse[] */
    private array $items;
    private string $shipmentID;
    private InsertShipmentsMethodResponse $shipmentMethods;

    /**
     * @return int
     */
    public function getLocation(): int
    {
        return $this->location;
    }

    /**
     * @return ItemsResponse[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function getShipmentID(): string
    {
        return $this->shipmentID;
    }

    /**
     * @return InsertShipmentsMethodResponse
     */
    public function getShipmentMethods(): InsertShipmentsMethodResponse
    {
        return $this->shipmentMethods;
    }
}