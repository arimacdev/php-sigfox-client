<?php

use Arimac\Sigfox\Model\RegistrationJobStatus;
use Arimac\Sigfox\Response\Generated\DevicesBulkTransferResponse;
use Arimac\Sigfox\Sigfox;

require_once __DIR__."/../vendor/autoload.php";

// Initializing the client
$sigfox = new Sigfox("myapikey", "mypassword");

// Starting the transfer job
$job = $sigfox->devices()->bulk()->transfer([
    "deviceTypeId"=> "c123cbfe....",
    "data"=> [
        [
            "id"=> "ABCEF1",
            "keepHistory"=> true
        ],
        [
            "id"=> "AE234",
            "alive"=> false
        ]
    ]
]);

// Get original response
/** @var DevicesBulkTransferResponse **/
$response = $job->getOriginalResponse();
echo "Total:-". $response->getTotal();

// Checking the status
/** @var RegistrationJobStatus **/
$status = $job->status();
echo "Success:-". $status->getStatus()->getSuccess();

// Saving to the database
$jobId = $job->getId();

// Checking the status again with jobId
/** @var RegistrationJobStatus **/
$status = $sigfox->jobStatus($jobId);
echo "Success:-". $status->getStatus()->getSuccess();
