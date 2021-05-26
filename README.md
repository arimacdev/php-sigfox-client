<p align="center">
	<a href="https://github.com/arimacdev/php-sigfox-client">
			<img width="160px" src="./resources/sigfox-logo.png" />
	</a>
</p>

# PHP Sigfox Client

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

- [Documentation](https://arimacdev.github.io/php-sigfox-client)
- [CHANGELOG](https://github.com/arimacdev/php-sigfox-client/blob/main/CHANGELOG.md)
- [Contribution Guide](https://github.com/arimacdev/php-sigfox-client/blob/main/CONTRIBUTING.md)


## Installation

```
$ composer require arimac/sigfox guzzlehttp/guzzle:7.*
```

If you are planning to use another HTTP client other than `guzzlehttp`,
You do not want to install it.

## Usage

See the documentation for a detailed description. This is some code
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

- All operations implemented
- Ability to use user defined HTTP clients.
- Requests validation over validation rules in the API documentation.
- A developer friendly helper to handle pagination requests
- A developer friendly helper to handle async requests
- File downloads (kmz)

## Versioning

The initial version code is the `2.0.0`. The first number (`2`) belongs 
to the version number of the Sigfox API. Second number is changing with 
major versions. And the third number is changing with the minor
versions.

## Issues and Feature requests

Do not hesitate to report if you faced any issue or a bug while using 
this library. We are little bit busy, but happy to help you.

We have added just a few basic features to this library to solve only 
the most frequently encountered tasks. If you have an idea about a new
feature, feel free to let us know in the [issues](https://github.com/arimacdev/php-sigfox-client/issues)
section.

## Contributing

If you like to contribute and you do not have an idea about where to
contribute, go to the [issues](https://github.com/arimacdev/php-sigfox-client/issues)
section and try to pick one.

Read the [Contribution
Guide](https://github.com/arimacdev/php-sigfox-client/blob/main/CONTRIBUTING.md)
if you new to contribute. And open a PR to the `master` branch with your
contribution. Make sure all contributions are backward compatibility.
Because we are not frequently releasing major versions of this library.
