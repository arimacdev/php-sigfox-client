<?php

use Arimac\Sigfox\Sigfox;

require_once __DIR__."/../vendor/autoload.php";

// Initializing the sigfox client
$sigfox  = new Sigfox("apikey", "password");

// Fetching a list of devices
$devices = $sigfox->devices()->list(["limit"=>5/* chunk size is 5 */]);
// Iterating over devices
foreach($devices->items() as $device){
    echo json_encode($device);
    // process
}

// Fetching a list of devices
$devices = $sigfox->devices()->list(["limit"=>5/* chunk size is 5 */]);
// Iterating over page
foreach($devices->pages() as $page){
    $pageNumber = $devices->getPage();
    $response = $devices->getOriginalResponse();

    foreach($page as $item){
        // process
    }
}

// Iterating over results multiple times
$devices = $sigfox->devices()->list();
$devices->enableCache();

foreach($devices->items() as $device){}

foreach($devices->items() as $device){}
