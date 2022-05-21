<?php

namespace DeliveryMatchApiLibrary\dto\responses;

use DeliveryMatchApiLibrary\dto\general\response\Application;
use DeliveryMatchApiLibrary\dto\general\response\Delivery;
use DeliveryMatchApiLibrary\dto\general\response\Packages;
use DeliveryMatchApiLibrary\dto\general\response\Pickup;

class UpdateShipmentResponse
{
    private Pickup $pickup;
    private Delivery $delivery;
    private Packages $packages;
    private Application $application;
}