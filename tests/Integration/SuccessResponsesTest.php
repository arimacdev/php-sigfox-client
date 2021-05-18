<?php
namespace Arimac\Sigfox\Test;

use Arimac\Sigfox\Model\Device;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Test\Integration\BaseTestCase;
use GuzzleHttp\Psr7\Response;

class SuccessResponsesTest extends BaseTestCase {
    public function testGetRequest(){
        $response = $this->response("deviceGet");
        $responseArr = json_decode($response, true);
        $this->mock->append(new Response(200, ["Content-Type"=> "application/json"], $response));              

        $device = $this->client->devices()->find(1005)->get();

        $serializer = new ClassSerializer(Device::class);
        $data = $serializer->serialize($device);
        $this->assertArraySimilar($responseArr, $data);
    }
}
