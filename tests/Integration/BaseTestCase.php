<?php
namespace Arimac\Sigfox\Test\Integration;

use Arimac\Sigfox\Client\Client as ClientClient;
use GuzzleHttp\Handler\MockHandler;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use Arimac\Sigfox\Test\Integration\MockClient;
use Arimac\Sigfox\Sigfox;
use ReflectionClass;
use ReflectionObject;

class BaseTestCase extends TestCase {
    /** @var MockHandler **/
    protected $mock;

    /** @var Sigfox **/
    protected $client;

    protected function setUp(): void
    {
        $mock = new MockHandler(); 

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);
        $mockClient = new MockClient("","","");
        $mockClient->setClient($client);
        $httpClient = new ClientClient($mockClient);

        $sigfoxClass = new ReflectionClass(Sigfox::class);
       
        /** @var ReflectionObject **/
        $sigfox = $sigfoxClass->newInstanceWithoutConstructor();
        $reflection = new \ReflectionProperty(get_class($sigfox), 'client');
        $reflection->setAccessible(true);
        $reflection->setValue($sigfox, $httpClient);
      
        $this->mock = $mock;
        $this->client = $sigfox;
    } 
}
