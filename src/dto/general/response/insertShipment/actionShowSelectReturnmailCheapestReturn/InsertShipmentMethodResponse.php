<?php

namespace DeliveryMatchApiLibrary\dto\general\response\insertShipment\actionShowSelectReturnmailCheapestReturn;

class InsertShipmentMethodResponse
{
    public string $url;
    public InsertLowestPriceResponse $lowestPrice;
    public InsertEarliestResponse $earliest;

    /** @var InsertAllResponse[] */
    public array $all;
}