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
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentsRequest;

require __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

//$shipment = new GetShipmentRequest(123, "test123");
//$shipment = new GetShipmentsRequest(new DateTime('2022-02-20'), new DateTime('2022-02-25'), null, null);
$shipment = new UpdateShipmentRequest(
        new Client(66, "API", null, Action::BOOK, Method::FIRST, null, null),
        new ShipmentUpdate(123456, Status::DELIVERED, null, null, null, null, null),
        new Sender(
            new Address("Test van Test", null, "Testertje", null, "Straatje", "12", "A", "1234AB", "Den Haag", "Nederland", null, null),
            new Contact("0612345678", "test@gmail.com")
        ),
        new Customer("66", new Address("Test van Test", null, "Testertje", null, "Straatje", "12", "A", "1234AB", "Den Haag", "Nederland", null, null), null, null),
        new Packages([new Package(
            null,
            "something",
            null,
            10,
            20,
            20,
            20),
            new Package(
                null,
                "something2",
                null,
                10,
                20,
                20,
                20)
        ]),
        new Quote([new Product(
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            2,
            20,
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
        null,
        null,
        null,
);

echo json_encode($shipment, JSON_PRETTY_PRINT);

try {
//    $res = $api->getShipments($shipment);
//    $res = $api->updateShipment($shipment);
//    print_r($res);

} catch (\DeliveryMatchApiLibrary\exceptions\DeliveryMatchException $e) {
    print_r($e);
}


