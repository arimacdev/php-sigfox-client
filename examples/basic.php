<?php

use Arimac\Sigfox\Model\DeviceCreationJob;
use Arimac\Sigfox\Model\DeviceUpdateJob;
use Arimac\Sigfox\Sigfox;

require_once __DIR__ . "/../vendor/autoload.php";

$sigfox = new Sigfox("myapikey", "mypassword");

$device = $sigfox->devices()->find("ABCDE4")->get();

$deviceId = $sigfox->devices()->create([
    "pac"=> "585CB3B42AC98BD4",
    "name"=> "Device 1",
    "deviceTypeId"=> "57309548171c857460043085",
    "id"=> "00FF"
]);

$deviceId = $sigfox->devices()->create(
    (new DeviceCreationJob)
        ->setPac("585CB3B42AC98BD4")
        ->setId("00FF")
        ->setName("Device 1")
        ->setDeviceTypeId("57309548171c857460043085")
);

$sigfox->devices()->find("ABCDE4")->update([
    "name"=> "Device 2"
]);

$sigfox->devices()->find("ABCDE4")->update(
    (new DeviceUpdateJob)
        ->setName("Device 2")
);

$sigfox->devices()->find("ABCDE4")->delete();
