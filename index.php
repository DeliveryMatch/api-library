<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\dto\Action;
use DeliveryMatchApiLibrary\dto\Client;
use DeliveryMatchApiLibrary\dto\InsertShipmentRequest;

require __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

$shipment = new InsertShipmentRequest(
    new Client(1, "API", Action::BOOK)
);

try {
    $api->sendRequest("me", [""]);
} catch (Exception $e) {
    print_r($e);
}
