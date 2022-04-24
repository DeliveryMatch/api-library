<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\dto\general\updates\ShipmentUpdate;
use DeliveryMatchApiLibrary\dto\general\updates\Status;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentsRequest;

require __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

$shipment = new UpdateShipmentsRequest([
    new UpdateShipmentRequest(null, new ShipmentUpdate("123", Status::DRAFT, null, null, null, null, null), null, null),
    new UpdateShipmentRequest(null, new ShipmentUpdate("1234", Status::DRAFT, null, null, null, null, null), null, null)
]);

print_r($shipment);

//try {
//    $api->sendRequest("me", [""]);
//} catch (Exception $e) {
//    print_r($e);
//}
