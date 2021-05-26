Async Responses
===============

This library provide you the easiest way to deal with async responses. With this way
you do not to pass jobId to one request to another request. This is a basic example.

.. code-block:: php
    :lineos:

    // Calling the start request
    $job = $sigfox->devices()->bulk()->transfer([
        "deviceTypeId"=> "abcdef435....",
        "data"=> [
            [
                "id"=> "ABCE4",
                "activable"=> false
            ],
            [
                "id"=> "ABGH4",
                "keepHistory"=> false
            ]
        ]
    ]);

    sleep(10000);

    // Fetching job status
    $status = $job->status();
    $total = $status->getTotal();

And you can also access the original data of the first response by ``getOriginalResponse`` method.

.. code-block:: php
    :lineos:

    // Calling the start request
    $job = $sigfox->devices()->bulk()->transfer([/** collapsed **/]);

    $startResponse = $job->getOriginalResponse();
    $total = $startResponse->getTotal();

When developing web sites, sometimes you have to check the job status by another request after started
the job. So you have to save the job id in somewhere and fetch it again in next request. We faced the
same issue and we implemented an easy-to-use method for you.

.. code-block:: php
    :lineos:

    // Calling the start request
    $job = $sigfox->devices()->bulk()->transfer([/** collapsed **/]);
 
    $jobId = $job->getId();

    // Save this job id in your database

    // You can get the job status in next request by a one method
    $status = $sigfox->jobStatus($jobId);
    $total = $status->getTotal();

Refer the full `API reference`_ to get an idea about return types.

Next:- :doc:`Custom HTTP Clients<customclients>`

.. _API reference: https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Response-Async-AsyncResponse.html
