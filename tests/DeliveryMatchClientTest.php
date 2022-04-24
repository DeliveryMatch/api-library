<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\dto\Action;
use DeliveryMatchApiLibrary\dto\Address;
use DeliveryMatchApiLibrary\dto\Client;
use DeliveryMatchApiLibrary\dto\Customer;
use DeliveryMatchApiLibrary\dto\InsertShipmentRequest;
use DeliveryMatchApiLibrary\dto\Method;
use DeliveryMatchApiLibrary\dto\Product;
use DeliveryMatchApiLibrary\dto\Quote;
use DeliveryMatchApiLibrary\dto\Shipment;
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

    public function test_insert_shipment_should_give_valid_response() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $shipment = new InsertShipmentRequest(
            new Client(1, "API", null, Action::BOOK, Method::FIRST, null, null),
            new Shipment("test_123", "test_123_r", "NL", "EUR", null, null, null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,),
            null,
            new Customer(null, new Address("DM_Test", null, "Street 1A", null, "Street", "1", "A", "1234AB", "The Hague", "Netherlands", null, null), null, null),
            null,
            new Quote([new Product("123", null, null, null, null, "description", "some content", "123456789", null, null, 2, 14.99, 5, 20, 20, null, null, null, null, null, null, null, null,
            )]),
            null,
            null,
            40,
            null,
            15
        );

        $res = $api->insertShipment($shipment);
        $this->assertEquals("success", $res->status);
        $this->assertEquals(150, $res->code);
        $this->assertEquals("Successful API connection", $res->message);
    }
}