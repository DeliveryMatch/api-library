<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class GetShipmentsRequest
{
    protected string $dateFrom;
    protected string $dateTo;
    protected ?string $status;
    protected ?string $channel;

    /** @param array $shipment */
    public function __construct(array $shipment)
    {
        $this->dateFrom = $shipment['dateFrom'];
        $this->dateTo = $shipment['dateTo'];
        $this->status = $shipment['status'];
        $this->channel = $shipment['channel'];
    }

    /** @return string */
    public function getDateFrom(): string
    {
        return $this->dateFrom;
    }

    /** @return string */
    public function getDateTo(): string
    {
        return $this->dateTo;
    }

    /** @return string|null */
    public function getStatus(): string|null
    {
        return $this->status;
    }

    /** @return string|null */
    public function getChannel(): string|null
    {
        return $this->channel;
    }

    /** @return array */
    #[ArrayShape(['dateFrom' => "string", 'dateTo' => "string", 'status' => "null|string", 'channel' => "null|string"])] public function jsonSerialize(): array
    {
        return
            [
                'dateFrom' => $this->getDateFrom(),
                'dateTo' => $this->getDateTo(),
                'status' => $this->getStatus(),
                'channel' => $this->getChannel()
            ];
    }
}