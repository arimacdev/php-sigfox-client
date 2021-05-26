<?php
namespace Arimac\Sigfox\Test\Integration;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\Response\BadRequestException;
use Arimac\Sigfox\Exception\Response\ConflictException;
use Arimac\Sigfox\Exception\Response\ForbiddenException;
use Arimac\Sigfox\Exception\Response\InternalServerException;
use Arimac\Sigfox\Exception\Response\NotFoundException;
use Arimac\Sigfox\Exception\Response\UnauthorizedException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Model\DeviceCreationJob;
use Arimac\Sigfox\Model\DeviceUpdateJob;
use GuzzleHttp\Psr7\Response;

class ErrorResponseTest extends BaseTestCase {
    private function provideResponseData($codes){
        $errors = [
            400=>[
                400, 
                BadRequestException::class,
                json_encode([
                    "message"=> "bad request",
                    "errors"=>[
                        [
                            "type"=> "body",
                            "field"=> "location.temperature",
                            "message"=> "Invalid numeric value provided."
                        ]
                    ]
                ])
            ],
            401=>[
                401,
                UnauthorizedException::class,
                null
            ],
            403=>[
                403,
                ForbiddenException::class,
                json_encode(["message"=> "You are not allowed to access the resource."])
            ],
            404=>[
                404,
                NotFoundException::class,
                json_encode(["message"=> "The requested resource was not found."])
            ],
            409=>[
                409,
                ConflictException::class,
                json_encode(["message"=> "A conflict happened with the current state of the resource."])
            ],
            500=>[
                500,
                InternalServerException::class,
                null
            ]
        ];
        return array_map(function($code)use($errors){
            return $errors[$code];
        }, $codes);
    }

    /**
     * @dataProvider provideGetResponseData
     */
    public function testGetResponse(int $status, string $exception, ?string $body){
        $this->mock->append(new Response($status, ["Content-Type"=> "application/json"], $body));              
        $this->expectException($exception);
        $this->client->devices()->find(1005)->get();
    }

    public function provideGetResponseData(){
        return $this->provideResponseData([400,401,403,404,500]);
    }

    /**
     * @dataProvider providePostResponseData
     */
    public function testPostResponse(int $status, string $exception, ?string $body){
        $deviceCreation = $this->sample("deviceCreationJob");
        $deviceCreationArr = json_decode($deviceCreation, true);
        $this->mock->append(new Response($status, ["Content-Type"=> "application/json"], $body));              

        $this->expectException($exception);

        $this->client->devices()->create(DeviceCreationJob::from($deviceCreationArr));
    }

    public function providePostResponseData(){
        return $this->provideResponseData([400,401,403,409,500]);
    }

    /**
     * @dataProvider providePutResponseData
     */
    public function testPutResponse(int $status, string $exception, ?string $body){
        $deviceUpdate = $this->sample("deviceUpdateJob");
        $deviceUpdateArr = json_decode($deviceUpdate, true);
        $this->mock->append(new Response($status, ["Content-Type"=> "application/json"], $body));              

        $this->expectException($exception);

        $this->client->devices()->find(1005)->update(DeviceUpdateJob::from($deviceUpdateArr));
    }

    public function providePutResponseData(){
        return $this->provideResponseData([400,401,403,404,500]);
    }

    /**
     * @dataProvider provideDeleteResponseData
     */
    public function testDeleteResponse(int $status, string $exception, ?string $body){
        $this->mock->append(new Response($status, ["Content-Type"=> "application/json"], $body));              

        $this->expectException($exception);

        $this->client->devices()->find(1005)->delete();
    }

    public function provideDeleteResponseData(){
        return $this->provideResponseData([400,401,403,404,500]);
    }

    public function testNotJsonBody(){
        $this->mock->append(new Response(200, ["Content-Type"=> "application/json"], "abc{"));

        $this->expectException(DeserializeException::class);
        $this->client->devices()->find(1005)->get();
    }

    public function testWrongDataFormatBody(){
        $device = $this->sample("device");
        $deviceArr = json_decode($device, true);
        $deviceArr["contract"] = "abcdef"; 
        $this->mock->append(new Response(200, ["Content-Type"=> "application/json"], json_encode($deviceArr)));

        $this->expectException(DeserializeException::class);
        $this->client->devices()->find(1005)->get();
    }

    public function testWrongDataFormatRequestBody(){
        $device = $this->sample("deviceCreationJob");
        $deviceArr = json_decode($device, true);
        $deviceArr["productCertificate"] = "abcdef"; 
        $this->mock->append(new Response(200, ["Content-Type"=> "application/json"], "{\"id\":\"56E3AD\"}"));

        $this->expectException(SerializeException::class);
        $this->client->devices()->create(DeviceCreationJob::from($deviceArr));
    }

    public function testInvalidRequestBody(){
        $device = $this->sample("deviceCreationJob");
        $deviceArr = json_decode($device, true);
        unset($deviceArr["deviceTypeId"]); 
        $this->mock->append(new Response(200, ["Content-Type"=> "application/json"], "{\"id\":\"56E3AD\"}"));

        $this->expectException(ValidationException::class);
        $this->client->devices()->create(DeviceCreationJob::from($deviceArr));
    }

    public function testPagindatedErrorResponse(){
        $device = json_decode($this->sample("device"), true);
        $devices = [];
        for($i=0; $i<5; $i++){
            $newDevice = $device;
            $newDevice["id"] = (string)($i+1);
            $newDevice["name"] = "device#".($i+1);
            $devices[] = $device;
        }

        $this->mock->append(new Response(
            200,
            ["Content-Type"=> "application/json"], 
            json_encode(["data"=>$devices, "paging"=>["next"=> "abc"]])
        ));
        $this->mock->append(new Response(
            500,
            [],
            ''
        ));

        $devices = $this->client->devices()->list();
        $this->expectException(InternalServerException::class);
        foreach($devices->pages() as $page){
        }
    }

    public function testAsyncRequest(){
        $bulkTransferResponse = $this->sample("bulkTransferResponse");
        $this->mock->append(new Response(200,[], $bulkTransferResponse));

        $bulkTransferRequest = $this->sample("bulkTransferRequest");
        $transferRequestArr = json_decode($bulkTransferRequest, true);
        $job = $this->client->devices()->bulk()->transfer($transferRequestArr);

        $this->expectException(InternalServerException::class);
        $this->mock->append(new Response(500,[],''));
        $job->status();
    }

    public function testFileDownload(){
        $tmpFile = __DIR__."/test.txt";
        $this->mock->append(new Response(500,[], "Test"));
        $this->expectException(InternalServerException::class);
        $resource = fopen($tmpFile, "w+"); 
        $this->client->tiles()->publicCoverage()->kmzTiles($resource);
    }
    /**
     * This method is called after each test.
     */
    protected function tearDown(): void
    {
        @unlink(__DIR__."/test.txt");
    }

}
