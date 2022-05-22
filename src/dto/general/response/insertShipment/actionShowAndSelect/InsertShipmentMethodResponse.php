<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowAndSelect;

class InsertShipmentMethodResponse
{
    public string $url;
    public InsertLowestPriceResponse $lowestPrice;
    public InsertEarliestResponse $earliest;

    /** @var InsertAllResponse[] */
    public array $all;
}