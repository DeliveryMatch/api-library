<?php

namespace DeliveryMatchApiLibrary\dto\general;
use DateTime;

class Warehouse implements \JsonSerializable
{
    private ?int $id;
    private ?DateTime $stockdate;

    /**
     * @param int|null $id
     * @param DateTime|null $stockdate
     */
    public function __construct(?int $id, ?DateTime $stockdate)
    {
        $this->id = $id;
        $this->stockdate = $stockdate;
    }

    /** @return int|null */
    public function getId(): ?int
    {
        return $this->id;
    }

    /** @return DateTime|null */
    public function getStockdate(): ?DateTime
    {
        return $this->stockdate;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'stockdate' => $this->getStockdate()->format('Y-m-d')
        ];
    }
}