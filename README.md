# DeliveryMatch API library

## 1. Installation:

Via composer:

```shell
composer require deliverymatch/api-library
```

Or download as zip and import into your project.

## 2. How to use:

```php
use DeliveryMatchApiLibrary\DeliveryMatchClient;

// create a new instance with clientId, apiKey and url provided by us.
$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);

$requestData = [
    "shipment" => [
        "id" => 123456789
    ] 
];

$shipment = $api->sendRequest("getShipment", $requestData);
```