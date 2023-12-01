<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DateTime;
use JetBrains\PhpStorm\Internal;

class GetShipmentsRequest implements \JsonSerializable
{
    protected DateTime $dateFrom;
    protected DateTime $dateTo;
    public ?string $status;
    protected ?string $channel;

    /**
     * @param DateTime $dateFrom
     * @param DateTime $dateTo
     * @param string|null $status
     * @param string|null $channel
     */
    public function __construct(DateTime $dateFrom, DateTime $dateTo, ?string $status = null, ?string $channel = null)
    {
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->status = $status;
        $this->channel = $channel;
    }

    /**
     * @return DateTime
     */
    public function getDateFrom(): DateTime
    {
        return $this->dateFrom;
    }

    /**
     * @return DateTime
     */
    public function getDateTo(): DateTime
    {
        return $this->dateTo;
    }

    /** @return string|null */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /** @return string|null */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [
                'dateFrom' => $this->getDateFrom()->format("Y-m-d"),
                'dateTo' => $this->getDateTo()->format("Y-m-d"),
                'status' => $this->getStatus(),
                'channel' => $this->getChannel()
            ];
    }
}