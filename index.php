<?php

use DeliveryMatchApiLibrary\DeliveryMatchClient;

require __DIR__ . "/vendor/autoload.php";

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);