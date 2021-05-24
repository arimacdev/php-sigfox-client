# Contribution Guide Line

All contributions should be headed to the `master` branch. And you
should run following checks before sending a PR.

- `make codegen`:- To wipe out all manual changes in auto generating
files
- `make psalm`:- To analyze the code
- `make phpunit`:- To Run all unit tests

## Code auto generation

As you can see our code base has so many classes. Most of them are auto
generated classes. These are the auto generated classes

- `src/Model/*`
- `src/Repository/*`
- `src/Request/*`
- `src/Response/Generated/*`
- `src/Sigfox.php`

So do not do any manual changes for these files. Change the code
generator at the `gencode` directory as you need.

We are using the Sigfox API OpenAPI specification to get necessary data
and `PHP-Parser` library to generate classes. If you found any new link
that not in this library, Kindly update the `config/openapi.json` file
and run the `make codegen` command. Make a PR after all checks completed.

## Documentation

If you found any undocumented functionality or a typo issue kindly add 
those changes and send your PR. Documentations should be written on `rst`
format by using `sphinx` syntaxes.

You can generate your changed documentation by running `make phpdoc`. 
This command will generate the documentation at the `docs/.build`
directory. If your documentation not generated, Please run the `make
phpdoc-clean` and try it again. This command will clear the
documentation cache. 

## Directory Structure

```
php-sigfox-client
|-- docs                // Documentation files
|-- examples            // Examples about usage
|-- gencode             // Code Generator
|   |-- bin
|   |   |-- gencode.php // Entry point of the code generator
|   |-- config          // Configuration files
|   `-- src             // Source code of the code generator
|       `-- Config      // Files that requires to generate config files
|-- resources           // External resources
|-- src                 // Source code of the client library
|   |-- Client          // HTTP request handlers
|   |-- Exception
|   |   `-- Response    // HTTP error exceptions
|   |-- Model           // Common models
|   |-- Repository      // Classes that calling requests
|   |-- Request         // Models associated with requests
|   |-- Response        // Models and classes associated with responses
|   |   |-- Generated   // Response models
|   |   `-- Paginated   // Paginated responses helper
|   |-- Serializer      // Request and response serializer
|   `-- Validator       // Request validator
`-- tests               // Test cases
    |-- Integration     // Integration test cases
    `-- Unit            // Unit test cases
```
