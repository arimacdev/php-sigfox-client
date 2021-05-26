<?php

use Arimac\Sigfox\Model\DeviceCreationJob;
use Arimac\Sigfox\Model\DeviceUpdateJob;
use Arimac\Sigfox\Sigfox;

require_once __DIR__ . "/../vendor/autoload.php";

// Initializing the sigfox client
$sigfox = new Sigfox("username", "password");

// Fetch a specific device
$device = $sigfox->devices()->find("ABC123")->get();

// Creating a device with a data array
$deviceId = $sigfox->devices()->create([
    "pac"=> "585CB3B42AC98BD4",
    "name"=> "Device 1",
    "deviceTypeId"=> "57309548171c857460043085",
    "id"=> "00FF"
]);

// Creating a device with an object
$deviceId = $sigfox->devices()->create(
    (new DeviceCreationJob)
        ->setPac("585CB3B42AC98BD4")
        ->setId("00FF")
        ->setName("Device 1")
        ->setDeviceTypeId("57309548171c857460043085")
);

// Updating a device with a data array
$sigfox->devices()->find("ABCDE4")->update([
    "name"=> "Device 2"
]);

// Updating a device with an object
$sigfox->devices()->find("ABCDE4")->update(
    (new DeviceUpdateJob)
        ->setName("Device 2")
);

// Delete a specific device
$sigfox->devices()->find("ABCDE4")->delete();
