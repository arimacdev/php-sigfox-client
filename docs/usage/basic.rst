Basic Usage
===========

This article contains some basic operations in the sigfox API.

Fetching a device
#################

.. code-block:: php
    :lineos:

    $device = $this->sigfox->devices()->find("AE5ASC")->get();

Creating a device
#################

There are two ways to pass data to a request. First method is passing array of properties and values. And the second
method is passing an object. You can check supported properties and methods in the classes from the 
`API reference`_ .

.. code-block:: php
    :lineos:

    // By array of parameters
    $deviceId = $sigfox->devices()->create([
        "pac"=> "585CB3B42AC98BD4",
        "name"=> "Device 1",
        "deviceTypeId"=> "57309548171c857460043085",
        "id"=> "00FF"
    ]);

    // By object
    $deviceId = $sigfox->devices()->create(
        (new DeviceCreationJob)
            ->setPac("585CB3B42AC98BD4")
            ->setId("00FF")
            ->setName("Device 1")
            ->setDeviceTypeId("57309548171c857460043085")
    );

Updating a device
#################

As you can see in below example some requests do not return a response. Usually update and delete requests not
returning any response. All request methods throwing exceptions if the request failed. So you can handle these
errors by adding a ``try {} catch``. See  :doc:`Exception Handling<exceptions>` for a detailed description.

.. code-block:: php
    :lineos:

    // By using arrays
    $sigfox->devices()->find("ABCDE4")->update([
        "name"=> "Device 2"
    ]);

    // By using objects
    $sigfox->devices()->find("ABCDE4")->update(
        (new DeviceUpdateJob)
            ->setName("Device 2")
    );

Deleting a device
#################

.. code-block:: php
    :lineos:

    $sigfox->devices()->find("ABCDE4")->delete();

This is only the examples for operations in the device section. You can check all operations at the `API reference`_


Next:- :doc:`Paginated Responses<pagination>`


.. _API reference: https://arimacdev.github.io/php-sigfox-client/namespaces/arimac-sigfox.html
