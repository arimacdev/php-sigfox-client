<?php
namespace Arimac\Sigfox\Test;

use Arimac\Sigfox\Request\DevicesIdGet;
use Arimac\Sigfox\Test\Integration\BaseTestCase;
use GuzzleHttp\Psr7\Response;

class SuccessResponsesTest extends BaseTestCase {
    public function testPostRequest(){
        $this->mock->append(new Response(200, [], "256"));              
        $device = $this->client->devices()->find(1005)->get(new DevicesIdGet());
        $this->assertTrue($device);
    }
}
