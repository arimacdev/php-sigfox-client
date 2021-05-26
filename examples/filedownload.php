<?php

use Arimac\Sigfox\Exception\SigfoxException;
use Arimac\Sigfox\Sigfox;

require_once __DIR__ . "/../vendor/autoload.php";

// Initializing the sigfox client
$sigfox = new Sigfox("myapikey", "mypassword");

$myfile = fopen("./myfile.kmz", "w+");

try {
    $sigfox->tiles()->publicCoverage()->kmzTiles($myfile);
} catch (SigfoxException $e){
    echo $e->getMessage();
    fclose($myfile);
    unlink($myfile);
}


