<?php

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\SigfoxException;
use Arimac\Sigfox\Sigfox;

require_once __DIR__."/../vendor/autoload.php";

// Initializing the client
$sigfox = new Sigfox("myapikey", "mypassword");

// Handling deserialize error
try {
    $deviceId = $sigfox->devices()->create([
        "pac"=> "585CB3B42AC98BD4",
        "name"=> "Device 1",
        // This data type is wrong. expecting a string.
        "deviceTypeId"=> ["57309548171c857460043085"],
        "id"=> "00FF"
    ]);
} catch (DeserializeException $e){
    echo $e->getMessage();
    $expectedTypes = $e->getExpectedTypes();
}

// Handling response errors
try {
    $device = $sigfox->devices()->find("ACE4")->get();
} catch (ResponseException $e){
    echo $e->getMessage();
    $httpCode = $e->getCode();
}

// Handling any sigfox exception
try {
    $device = $sigfox->devices()->find("ACE1")->get();
} catch (SigfoxException $e){
    echo $e->getMessage();
}
