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
use DeliveryMatchApiLibrary\dto\requests\GetServicesRequest;
use DeliveryMatchApiLibrary\dto\requests\GetShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\InsertShipmentsRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentRequest;
use DeliveryMatchApiLibrary\dto\requests\UpdateShipmentsRequest;
use DeliveryMatchApiLibrary\exceptions\DeliveryMatchException;
use DeliveryMatchApiLibrary\exceptions\InvalidDeliveryMatchLinkException;
use PHPUnit\Framework\TestCase;

class DeliveryMatchClientTest extends TestCase
{

    public function test_instance() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $this->assertInstanceOf(DeliveryMatchClient::class, $api);
    }

    /**
     * @throws DeliveryMatchException
     */
    public function test_invalid_host_should_throw_exception() {
        $host = "host";

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Could not resolve host: $host");
        $this->expectExceptionCode(6);

        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $host);
        $api->sendRequest("me", []);
    }

    /**
     * @throws DeliveryMatchException
     */
    public function test_invalid_delivery_match_link_should_throw_exception() {
        $host = "www.deliverymatch.eu";
        $this->expectException(InvalidDeliveryMatchLinkException::class);
        $this->expectExceptionMessage("$host is not a valid DeliveryMatch API link");

        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $host);
        $api->sendRequest("me", []);
    }

    public function test_incorrect_credentials_should_throw_exception_with_status_unauthorized() {
        $this->expectException(DeliveryMatchException::class);
        $this->expectExceptionMessage("unauthorized: API key not valid");
        $this->expectExceptionCode(2);

        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], "abcdefg12345", $_SERVER["URL"]);
        $api->sendRequest("me", []);
    }

    public function test_send_request_should_give_valid_response() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        try {
            $me = $api->sendRequest("me", []);

            $this->assertEquals("success", $me->status);
            $this->assertEquals(150, $me->code);
            $this->assertEquals("Successful API connection", $me->message);

        } catch (DeliveryMatchException $e) {
            $this->fail("Method should not throw exception");
        }
    }

//    public function test_insert_shipment_should_give_valid_response() {
//        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
//        $shipment = new InsertShipmentRequest(
//            new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
//            new Shipment("test_123", "test_123_r", "NL", "EUR", null, null, null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,),
//            null,
//            new Customer(null, new Address("DM_Test", null, "Street 1A", null, "Street", "1", "A", "1234AB", "The Hague", "Netherlands", null, null), null, null),
//            null,
//            new Quote([new Product("123", null, null, null, null, "description", "some content", "123456789", null, null, 2, 14.99, 5, 20, 20, null, null, null, null, null, null, null, null,
//            )]),
//            null,
//            null,
//            40,
//            null,
//            15
//        );
//
//        $res = $api->insertShipment($shipment);
//        $this->assertEquals("success", $res->status);
//        $this->assertEquals(150, $res->code);
//        $this->assertEquals("Successful API connection", $res->message);
//    }

//    // Will uncomment once 'missing shipment weight' issue is fixed
//    public function test_insert_shipmentS_should_give_valid_response() {
//        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
//        $shipment = new InsertShipmentsRequest([
//            new InsertShipmentRequest(
//                new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
//                new Shipment("test_123", "test_123_r", "NL", "EUR", null, null, null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,),
//                null,
//                new Customer(null, new Address("DM_Test", null, "Street 1A", null, "Street", "1", "A", "1234AB", "The Hague", "Netherlands", null, null), null, null),
//                null,
//                new Quote([new Product("123", null, null, null, null, "description", "some content", "123456789", null, null, 2, 14.99, 5, 20, 20, null, null, null, null, null, null, null, null,
//                )]),
//                null,
//                null,
//                40,
//                null,
//                15
//            ),
//            new InsertShipmentRequest(
//                new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
//                new Shipment("test_1234", "test_1234_r", "NL", "EUR", null, null, null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,),
//                null,
//                new Customer(null, new Address("DM_Test", null, "Street 1A", null, "Street", "1", "A", "1234AB", "The Hague", "Netherlands", null, null), null, null),
//                null,
//                new Quote([new Product("123", null, null, null, null, "description", "some content", "123456789", null, null, 2, 14.99, 5, 20, 20, null, null, null, null, null, null, null, null,
//                )]),
//                null,
//                null,
//                40,
//                null,
//                15
//            )
//        ]);
//
//        $res = $api->insertShipment($shipment);
//        $this->assertEquals("success", $res->status);
//        $this->assertEquals(150, $res->code);
//        $this->assertEquals("Successful API connection", $res->message);
//    }

//    // successfully books it, but still returns exception
//    public function test_update_shipment_should_give_valid_response() {
//        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
//        $shipment = new UpdateShipmentRequest(
//            new Client(66, "API", null, Action::BOOK, Method::FIRST, null, null),
//            new ShipmentUpdate(8577049, Status::DRAFT, null, null, null, null, null),
//            null,
//            null,
//            null,
//            null,
//            null,
//            null,
//            null,
//            null,
//            null
//        );
//
//        $res = $api->updateShipment($shipment);
//
//        print_r($res);
//        $this->assertEquals("success", $res->status);
//        $this->assertEquals(7, $res->code);
//        $this->assertEquals("booked: Shipment successfully booked", $res->message);
//    }


//    /**
//     * @throws DeliveryMatchException
//     */
//    public function test_update_shipment_should_throw_exception() { // Works
//        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
//        $shipment = new UpdateShipmentRequest(
//                new Client(66, "API", null, Action::BOOK, Method::FIRST, null, null),
//                new ShipmentUpdate(123456, Status::DELIVERED, null, null, null, null, null),
//                null,
//                null,
//                null,
//                null,
//                null,
//                null,
//                null,
//                null,
//                null
//        );
//
//        $this->expectException(DeliveryMatchException::class);
//        $this->expectExceptionMessage("failure: Shipment not found");
//        $this->expectExceptionCode(32);
//
//        $api->updateShipment($shipment);
//    }

//    Returns empty shipments array, for some reason ? http code is 200
    /**
     * @throws DeliveryMatchException
     */
    public function test_update_shipmentS_should_throw_exception() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $shipment = new UpdateShipmentsRequest(
            new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
            new ShipmentUpdate(123456, Status::DRAFT, null, null, null, null, null),
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
            );

        print_r(json_encode($shipment, JSON_PRETTY_PRINT));

        $this->expectException(DeliveryMatchException::class);
//        $this->expectExceptionMessage(null);
//        $this->expectExceptionCode(null);

        print_r($api->updateShipments($shipment));
    }

    /**
     * @throws DeliveryMatchException
     */
    public function test_get_shipment_should_throw_exception() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $shipment = new GetShipmentRequest(123, 'TUIN1000400374');

        $this->expectException(DeliveryMatchException::class);
        $this->expectExceptionMessage("failure: Shipment not found");
        $this->expectExceptionCode(32);

        $api->getShipment($shipment);
    }

    public function test_get_services_should_give_valid_response() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $shipment = new GetServicesRequest("NL", "BE");

        $res = $api->getServices($shipment);
        print_r($res);
        $this->assertEquals("success", $res->status);
        $this->assertEquals(200, $res->code);
    }

    /**
     * @throws DeliveryMatchException
     */
    public function test_get_services_should_throw_exception() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $shipment = new GetServicesRequest("NL", "XX");

        $this->expectException(DeliveryMatchException::class);
        $this->expectExceptionMessage("failure: No services found");
        $this->expectExceptionCode(52);

        $api->getServices($shipment);
    }
}