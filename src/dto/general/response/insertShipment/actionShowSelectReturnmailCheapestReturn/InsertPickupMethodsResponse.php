<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

class InsertPickupMethodsResponse
{
    /** @var InsertAllResponse[] */
    private array $all;

    /**
     * @return InsertAllResponse[]
     */
    public function getAll(): array
    {
        return $this->all;
    }

}