<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;
use DeliveryMatchApiLibrary\exceptions\DeliveryMatchException;
use PHPUnit\Framework\TestCase;

class DeliveryMatchClientTest extends TestCase
{

    public function test_instance() {
        $api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
        $this->assertInstanceOf(DeliveryMatchClient::class, $api);
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
            $this->assertEquals("Succesful API connection", $me->message);
            
        } catch (DeliveryMatchException $e) {
            $this->fail("Method should not throw exception");
        }

    }


}