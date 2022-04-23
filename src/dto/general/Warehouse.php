<?php

namespace DeliveryMatchApiLibrary\dto\general;
use DateTime;

class Warehouse
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
}