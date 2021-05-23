Paginated Responses
===================

You do not have to mess with the page numbers, and offsets when using this library. We have
implemented a very easy interface to handle pagination responses. Lets see a quick example:-

.. code-block:: php
    :lineos:

   $devices = $this->sigfox->devices()->list();

   foreach($devices->items() as $device){
        // Your code
   }

It will automatically calling the API and fetching all data as chunks till end.

And there is another iterator method to iterate over pages. You can get the page number or
the original response per each page with this method.

.. code-block:: php
    :lineos:

    $devices = $this->sigfox->devices()->list();

    foreach($devices->pages() as $items){

        /** @var Arimac\Sigfox\Response\Generated\DevicesListResponse **/
        $response = $devices->getOriginalResponse();
        $pageId = $devices->getPage();

        /** @var Arimac\Sigfox\Model\Device[] $device **/
        foreach($items as $device){
            // Your code
        }
    }

This iterator will call the API in each iteration and fetching data for the page.

As other methods you can pass ``limit``, ``offset`` values and other values as parameters.
By the ``limit`` parameter you can ``limit`` the items count per each request. With the 
offset parameter you can continue an iteration that you previously stopped.

.. code-block:: php
    :lineos:

    $devices = $this->sigfox->devices()->list([
        "limit"=> 20,
        "offset"=> 30,
        "deviceTypeId"=> "05f8932chg...."
    ]);

There is a builtin cache in pagination responses. But it disabled by default. Because it
consumes the runtime memory. Enable it if you want to re-iterate over items or pages. When
you iterate again, it will fetching the data from the cache insteed of fetching the data
from the API.

.. code-block:: php
    :lineos:

    $devices = $this->sigfox->devices()->list();
    
    $devices->enableCache();

    foreach($devices->pages() as $page){
        // This time fetching the data from API
    }

    foreach($devices->items() as $device){
        // This time fetching the data from cache
    }

Next :doc:`Async Responses<async>`
