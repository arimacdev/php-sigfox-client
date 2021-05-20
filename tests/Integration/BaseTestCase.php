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
use GuzzleHttp\Middleware;
use ReflectionClass;
use ReflectionObject;

class BaseTestCase extends TestCase {
    /** @var MockHandler **/
    protected $mock;

    /** @var Sigfox **/
    protected $client;

    protected array $history = [];

    protected function setUp(): void
    {
        $mock = new MockHandler(); 
        $history = Middleware::history($this->history);
        $handlerStack = HandlerStack::create($mock);
        $handlerStack->push($history);
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

    protected function sample(string $fileName): string {
        return file_get_contents(dirname(__DIR__)."/Integration/Responses/".$fileName.".json");
    }

    /**
     * Asserts that two associative arrays are similar.
     *
     * Both arrays must have the same indexes with identical values
     * without respect to key ordering
     *
     * @param array $expected
     * @param array $array
     */
    protected function assertArraySimilar(array $expected, array $array)
    {
        $this->assertEquals([], array_diff_key($array, $expected));

        foreach ($expected as $key => $value) {
            if (is_array($value)) {
                $this->assertArraySimilar($value, $array[$key]);
            } else {
                $this->assertArrayHasKey($key, $array);
                $this->assertEquals($value, $array[$key]);
            }
        }
    }
}
