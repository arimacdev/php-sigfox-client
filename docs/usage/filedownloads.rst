File Downloads
==============

Sigfox API provides some endpoints that returning files as the body. If you
call this API and saved it without any library, You have to spend two times
more than the actual time. With this library you can fetch and save parallaly
in the same time.

.. code-block:: php
    :lineos:

    $sigfox->tiles()->publicCoverage()->kmzTiles("./coverage.kmz");

To delete the file on an exception:-

.. code-block:: php
    :lineos:

    try{
        $sigfox->tiles()->publicCoverage()->kmzTiles("./coverage.kmz")
    } catch (SigfoxException $e) {
        echo $e->getMessage();
        unlink("./coverage.kmz");
    }

And also you can output the file contents on response.

.. code-block:: php
    :lineos:
    
    $output = fopen("php://output","w");
    $sigfox->tiles()->publicCoverage()->kmzTiles($output);

You can pass request parameters as the second argument of the function.
