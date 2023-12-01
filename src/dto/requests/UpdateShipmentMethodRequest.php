<?php

namespace DeliveryMatchApiLibrary\dto\requests;

use DateTime;

class UpdateShipmentMethodRequest implements \JsonSerializable {
    protected int $id;
    protected ?string $orderNumber;
    protected string $methodId;
    protected ?DateTime $date;
    protected ?string $action;

    /**
     * @param int $id
     * @param string|null $orderNumber
     * @param string $methodId
     * @param DateTime|null $date
     * @param string|null $action
     */
    public function __construct(int $id, ?string $orderNumber = null, string $methodId, ?DateTime $date = null, ?string $action = null)
    {
        $this->id = $id;
        $this->orderNumber = $orderNumber;
        $this->methodId = $methodId;
        $this->date = $date;
        $this->action = $action;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /** @return string|null */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /** @return string */
    public function getMethodId(): string
    {
        return $this->methodId;
    }

    /** @return DateTime|null */
    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    /** @return string|null */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /** @return array */
    public function jsonSerialize(): array
    {
        return
            [
                "shipment" =>
                [
                    'id'   => $this->getId(),
                    'orderNumber' => $this->getorderNumber()
                ],
                "shipmentMethod" =>
                    [
                        'id'   => $this->getMethodId(),
                        'date' => is_null($this->getDate()) ? $this->getDate() : $this->getDate()->format('Y-m-d')
                    ],
                "action" => $this->getAction()
            ];
    }
}