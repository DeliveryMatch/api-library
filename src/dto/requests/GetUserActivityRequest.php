<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DateTime;

class GetUserActivityRequest implements \JsonSerializable
{
    protected DateTime $dateFrom;
    protected DateTime $dateTo;

    /**
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     */
    public function __construct(DateTime $dateFrom, DateTime $dateTo)
    {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }

    /** @return DateTime */
    public function getDateFrom(): DateTime
    {
        return $this->dateFrom;
    }

    /** @return DateTime */
    public function getDateTo(): DateTime
    {
        return $this->dateTo;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [
                'dateFrom' => $this->getDateFrom()->format("Y-m-d"),
                'dateTo' => $this->getDateTo()->format("Y-m-d"),
            ];
    }
}