<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\dto\general\Action;
use DeliveryMatchApiLibrary\dto\general\Address;
use DeliveryMatchApiLibrary\dto\general\Client;
use DeliveryMatchApiLibrary\dto\general\Customer;
use DeliveryMatchApiLibrary\dto\general\Method;
use DeliveryMatchApiLibrary\dto\general\Product;
use DeliveryMatchApiLibrary\dto\general\Quote;
use DeliveryMatchApiLibrary\dto\general\Shipment;
use DeliveryMatchApiLibrary\dto\general\updates\ShipmentUpdate;
use DeliveryMatchApiLibrary\dto\general\updates\Status;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentsRequest;

require __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

//$shipment = new UpdateShipmentsRequest([
//    new UpdateShipmentRequest(null, new ShipmentUpdate("123", Status::DRAFT, null, null, null, null, null), null, null),
//    new UpdateShipmentRequest(null, new ShipmentUpdate("1234", Status::DRAFT, null, null, null, null, null), null, null)
//]);

//$shipment = new InsertShipmentsRequest(
//    new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
//    new Shipment("test_123", "test_123_r", "NL", "EUR", null, null, null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,),
//    null,
//    new Customer(null, new Address("DM_Test", null, "Street 1A", null, "Street", "1", "A", "1234AB", "The Hague", "Netherlands", null, null), null, null),
//    null,
//    new Quote([new Product(
//        "123",
//        null,
//        null,
//        null,
//        null,
//        "description",
//        "some content",
//        "123456789",
//        null,
//        null,
//        2,
//        14.99,
//        5,
//        20,
//        20,
//        null,
//        null,
//        null,
//        null,
//        null,
//        null,
//        null,
//        null,
//    )]),
//    null,
//    null,
//    40,
//    null,
//    10, );

$shipment = new GetShipmentRequest(array('id' => 8479316, 'orderNumber' => 'TUIN1000400374'));

print_r($shipment);
$res = $api->getShipment($shipment);

print_r(json_encode($res));



//try {
//    $api->sendRequest("me", [""]);
//} catch (Exception $e) {
//    print_r($e);
//}
