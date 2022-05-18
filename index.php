<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\dto\general\Action;
use DeliveryMatchApiLibrary\dto\general\Address;
use DeliveryMatchApiLibrary\dto\general\Client;
use DeliveryMatchApiLibrary\dto\general\Contact;
use DeliveryMatchApiLibrary\dto\general\Customer;
use DeliveryMatchApiLibrary\dto\general\Method;
use DeliveryMatchApiLibrary\dto\general\Package;
use DeliveryMatchApiLibrary\dto\general\Packages;
use DeliveryMatchApiLibrary\dto\general\Product;
use DeliveryMatchApiLibrary\dto\general\Quote;
use DeliveryMatchApiLibrary\dto\general\Sender;
use DeliveryMatchApiLibrary\dto\general\Shipment;
use DeliveryMatchApiLibrary\dto\general\updates\ShipmentUpdate;
use DeliveryMatchApiLibrary\dto\general\updates\Status;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentMethodRequest;

require __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

try {
//    $res = $api->getShipments(...);
} catch (\DeliveryMatchApiLibrary\exceptions\DeliveryMatchException $e) {
    print_r($e);
}


