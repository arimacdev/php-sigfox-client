<p align="center">
	<a href="https://github.com/arimacdev/php-sigfox-client">
			<img src="./resources/sigfox-logo.png" />
	</a>
</p>

# PHP Sigfox Client

---
<p align="center">
	<a href="https://opensource.org/licenses/MIT">
    <img 
      src="https://img.shields.io/badge/License-MIT-green.svg"
      alt="Travis:Status"
    />
  </a>
	<a href="https://opensource.org/licenses/MIT">
    <img 
      src="https://img.shields.io/packagist/php-v/arimac/sigfox"
      alt="PHP:Version"
    />
  </a>
	<a href="https://opensource.org/licenses/MIT">
    <img
      src="https://img.shields.io/packagist/v/arimac/sigfox"
      alt="Packagist:Version"
    />
  </a>
</p>

---

A high level, up-to-date client library to access Sigfox APIs. This
client library covered all the operations.

[Documentation](https://arimacdev.github.io/php-sigfox-client)


## Installation

```
$ composer require arimac/sigfox guzzlehttp/guzzle:7.*
```

If you are planning to use another HTTP client other than `guzzlehttp`,
You do not want to install it.

## Usage

See the documentation to view a detailed description. This is some code
snippets for you to get an idea about this library.

- Initializing the client

```php

use Arimac\Sigfox\Sigfox;

$sigfox = new Sigfox("myapikey", "password");
```

- Fetch a device from the server
```php
$device = $sigfox->devices()->find("AF01F")->get();
```

- Update a device
```php
$sigfox->devices()->find("AF01F")->update(["deviceTypeId"=>"0f1bc092ef..."]);
```

- Create a device
```php
$sigfox->devices()->create([
    "pac"=> "585CB3B42AC98BD4",
    "name"=> "Device 1",
    "deviceTypeId"=> "57309548171c857460043085",
    "id"=> "00FF"
]);

// Or you can use objects to pass data
$deviceId = $sigfox->devices()->create(
    (new DeviceCreationJob)
        ->setPac("585CB3B42AC98BD4")
        ->setId("00FF")
        ->setName("Device 1")
        ->setDeviceTypeId("57309548171c857460043085")
);

```

- Delete a device
```php
$sigfox->devices()->find("AF01F")->delete();
```

## Features

- Ability to use user defined HTTP clients.
- Requests validation over validation rules in the API documentation.
- A developer friendly helper to handle pagination requests
- A developer friendly helper to handle async requests
