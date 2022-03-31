# DeliveryMatch API library

The DeliveryMatch API library provides an easy way to connect with our API.

## Table of contents:
* [Table of contents](#table-of-contents)
* [Installation:](#installation)
  + [1. Composer](#1-composer)
  + [2. Download source](#2-download-source)
* [How to use:](#how-to-use)

## Installation:

There are currently 2 ways to use our library. You could import it in your composer project, or you can download the
source code and place it in your project.

### 1. Composer
```shell
composer require deliverymatch/api-library
```

### 2. Download source
You can download the source code via our [GitHub page](https://github.com/DeliveryMatch/api-library/releases). After you downloaded the zip you need to extract it into your project.

## How to use:
Create an instance of `DeliveryMatchClient`. The constructor requires 3 parameters. These 3 parameters are provided by [DeliveryMatch](https://www.deliverymatch.eu)
```php
use DeliveryMatchApiLibrary\DeliveryMatchClient;

$api = new DeliveryMatchClient($_SERVER["CLIENT_ID"], $_SERVER["API_KEY"], $_SERVER["URL"]);
```

Create your request using PHP arrays. You can find example requests for each endpoint in our API documentation. If you did not receive any API documentation you can request it by DeliveryMatch.
```php
$requestData = [
    "shipment" => [
        "id" => 12345678
    ]
]
```

Send your request with the `sendRequest` method. This method requires 2 parameters. The endpoint name, and the data you need to send. If you want to send an empty request use an empty array as parameter.
```php
try {
    $api->sendRequest("getShipment", $requestData)''
} catch (DeliveryMatchException $e) {
    // handle error
}
```

The `sendRequest` could throw a `DeliveryMatchException`. The exception code is the same value as the corresponding response code from our API documentation.
