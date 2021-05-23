Exception Handling
==================

There are four types of exceptions throwing from the API client library. And all the exceptions extended to
`SigfoxException`_ class. So you can catch all the exceptions that throwing from this client library by this
exception class.

1. **Serialization & Deserialization Exceptions**

    These exceptions throwing when you or the Sigfox server pass a different typed value than the expected value.
    DeserializationException is throwing when a user input array or a server returned response converting to objects.
    SerializeExceptions is throwing when a object converting to an array. You can get the expected type name as a
    string by ``getExpectedType`` method and actual type name by the ``getActualType`` method.

    `SerializeException API Reference`_

    `DeserializeException API Reference`_

2. **Validation Exceptions**

    There are some validations for parameters in the sigfox API documentation.  Validation Exceptions throwing if you
    provide an invalid value according to these validation rules.  You can get the invalid value by
    ``getValue`` method and validation rule by ``getRule`` method.

    `ValidationException API Reference`_

3. **Response Exceptions**

    These exceptions throwing when the server returned an HTTP error code. You can catch all HTTP errors by
    `ResponseException`_ class.

    Use below exceptions if you want to catch only specific error codes.

    * `BadRequestException`_ :- You can get the list of errors that received from the Sigfox using the `getErrors`
      method.
    * `ConflictException`_
    * `ForbiddenException`_
    * `InternalServerException`_
    * `MethodNotAllowedException`_ :- You can get a list of allowed methods using the `getAllowedMethods` method.
    * `NotFoundException`_
    * `PreconditionFailedException`_
    * `UnauthorizedException`_

    You can get the HTTP error code of every `ResponseException`_ s by `getCode` method.

4. **Unexpected Response Exception**

    When the server returned an error code that not mentioned in the documentation. But you can not catch it using 
    the `ResponseException`_ .



.. _ValidationException API Reference: https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-ValidationException.html
.. _SerializeException API Reference:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-SerializeException.html
.. _DeserializeException API Reference:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-DeserializeException.html
.. _SigfoxException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-SigfoxException.html
.. _ResponseException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-ResponseException.html
.. _BadRequestException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-BadRequestException.html
.. _ConflictException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-ConflictException.html
.. _ForbiddenException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-ForbiddenException.html
.. _InternalServerException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-InternalServerException.html
.. _MethodNotAllowedException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-MethodNotAllowedException.html
.. _NotFoundException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-NotFoundException.html
.. _PreconditionFailedException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-PreconditionFailedException.html
.. _UnauthorizedException:  https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Exception-Response-UnauthorizedException.html


