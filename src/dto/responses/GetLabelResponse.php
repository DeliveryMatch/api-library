<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\getLabel\LabelPackagesResponse;

class GetLabelResponse
{
    public string $status;
    public int $code;
    public string $message;
    public string $shipmentID;
    public string $orderNumber;
    public string $reference;
    public string $labelURL;
    public string $ZPL;

    /** @var LabelPackagesResponse[] */
    public $packages; //array( Packages )
}