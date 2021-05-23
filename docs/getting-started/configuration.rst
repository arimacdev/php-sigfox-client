Configuration
=============

As the first step add the ``Arimac\Sigfox\Sigfox`` class to your file.

.. code-block:: php
    :lineos:

    <?php

    use Arimac\Sigfox\Sigfox;

    require_once __DIR__."/vendor/autoload.php";

Then construct the sigfox class at the begining of the file or in the constructor of your controller.

.. code-block:: php
    :lineos:

   public function __construct(){
        $this->sigfox = new Sigfox("apikey","password");
   }

Also you can pass your custome HTTP client as the third argument to the constructor.

.. code-block:: php
    :lineos:

    public function __construct(){
        $this->sigfox = new Sigfox("apikey", "password", MyHTTPClient::class);
    }

Next:- :doc:`Usage<../usage>`
