<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\dto\Action;
use DeliveryMatchApiLibrary\dto\Method;
use DeliveryMatchApiLibrary\dto\Client;
use DeliveryMatchApiLibrary\dto\Customer;
use DeliveryMatchApiLibrary\dto\Address;
use DeliveryMatchApiLibrary\dto\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\Package;
use DeliveryMatchApiLibrary\dto\Product;
use DeliveryMatchApiLibrary\dto\Quote;
use DeliveryMatchApiLibrary\dto\Sender;
use DeliveryMatchApiLibrary\dto\Shipment;

require __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

$shipment = new InsertShipmentRequest(
    new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
    new Shipment("test_123", "test_123_r", "NL", "EUR", null, null, null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,),
    null,
    new Customer(null, new Address("DM_Test", null, "Street 1A", null, "Street", "1", "A", "1234AB", "The Hague", "Netherlands", null, null), null, null),
    null,
    new Quote([new Product(
        "123",
        null,
        null,
        null,
        null,
        "description",
        "some content",
        "123456789",
        null,
        null,
        2,
        14.99,
        5,
        20,
        20,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
    )]),
    null,
    null,
    40,
    null,
    10);

try {
    $api->sendRequest("me", [""]);
} catch (Exception $e) {
    print_r($e);
}
