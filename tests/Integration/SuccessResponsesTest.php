<?php
namespace Arimac\Sigfox\Test;

use Arimac\Sigfox\Model\Device;
use Arimac\Sigfox\Model\DeviceCreationJob;
use Arimac\Sigfox\Model\DeviceUpdateJob;
use Arimac\Sigfox\Request\DevicesList;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Test\Integration\BaseTestCase;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class SuccessResponsesTest extends BaseTestCase {
    public function testGetRequest(){
        $response = $this->sample("device");
        $responseArr = json_decode($response, true);
        $this->mock->append(new Response(200, ["Content-Type"=> "application/json"], $response));              

        $device = $this->client->devices()->find(1005)->get();

        $serializer = new ClassSerializer(Device::class);
        $data = $serializer->serialize($device);
        $this->assertArraySimilar($responseArr, $data);
        $this->assertArrayHasKey(0, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $this->assertSame("/devices/1005", $request->getUri()->getPath());
        $this->assertSame("GET", $request->getMethod());
    }

    public function testPutRequest(){
        $deviceUpdate = $this->sample("deviceUpdateJob");
        $deviceUpdateArr = json_decode($deviceUpdate, true);
        $this->mock->append(new Response(204, ["Content-Type"=> "application/json"]));              

        $this->client->devices()->find(1005)->update(DeviceUpdateJob::from($deviceUpdateArr));

        $this->assertArrayHasKey(0, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $this->assertSame("/devices/1005", $request->getUri()->getPath());
        $this->assertSame("PUT", $request->getMethod());
        $actual = json_decode($request->getBody()->__toString(), true );
        $this->assertArraySimilar($deviceUpdateArr, $actual);
    }

    public function testDeleteRequest(){
        $this->mock->append(new Response(204, ["Content-Type"=> "application/json"]));              

        $this->client->devices()->find(1005)->delete();

        $this->assertArrayHasKey(0, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $this->assertSame("/devices/1005", $request->getUri()->getPath());
        $this->assertSame("DELETE", $request->getMethod());
    }

    public function testPostRequest(){
        $deviceCreation = $this->sample("deviceCreationJob");
        $deviceCreationArr = json_decode($deviceCreation, true);
        $this->mock->append(new Response(201, ["Content-Type"=> "application/json"], "{\"id\":\"56E3AD\"}"));              

        $deviceId = $this->client->devices()->create(DeviceCreationJob::from($deviceCreationArr));
        $this->assertSame("56E3AD", $deviceId);

        $this->assertArrayHasKey(0, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $this->assertSame("/devices/", $request->getUri()->getPath());
        $this->assertSame("POST", $request->getMethod());
        $actual = json_decode($request->getBody()->__toString(), true );
        $this->assertArraySimilar($deviceCreationArr, $actual);
    }

    public function testPostRequestWithArray(){
        $deviceCreation = $this->sample("deviceCreationJob");
        $deviceCreationArr = json_decode($deviceCreation, true);
        $this->mock->append(new Response(201, ["Content-Type"=> "application/json"], "{\"id\":\"56E3AD\"}"));              

        $deviceId = $this->client->devices()->create($deviceCreationArr);
        $this->assertSame("56E3AD", $deviceId);

        $this->assertArrayHasKey(0, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $this->assertSame("/devices/", $request->getUri()->getPath());
        $this->assertSame("POST", $request->getMethod());
        $actual = json_decode($request->getBody()->__toString(), true );
        $this->assertArraySimilar($deviceCreationArr, $actual);
    }

    protected function setPaginatedResponses($responses = 2){
        $device = json_decode($this->sample("device"), true);
        $devices = [];
        for($i=0; $i<5*$responses; $i++){
            $newDevice = $device;
            $newDevice["id"] = (string)($i+1);
            $newDevice["name"] = "device#".($i+1);
            $devices[] = $device;
        }

        $responses = array_chunk($devices, 5);
        foreach($responses as $key=> $responseData){
            $next = $key!==count($responses)-1?"/abc".$key."?a=123":null;
            $this->mock->append(new Response(
                200,
                ["Content-Type"=> "application/json"], 
                json_encode(["data"=>$responseData, "paging"=>["next"=> $next]])
            ));
        } 

        return $devices;
    }

    public function testPaginatedResponseWithPageIterator(){
        $devices = $this->setPaginatedResponses();
        $expected = array_chunk($devices, 5); 

        $response = $this->client->devices()->list(DevicesList::from([
            "limit"=>100
        ]));
        $pages = iterator_to_array($response->pages());

        $serializer = new ClassSerializer(Device::class);
        foreach($pages as $pageKey=> $page){
            foreach($page as $itemKey=> $item){
                $pages[$pageKey][$itemKey] = $serializer->serialize($item);
            }
        }
        $this->assertArraySimilar($expected, $pages);

        $this->assertCount(2, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $uri = $request->getUri();
        $this->assertSame("/devices/", $uri->getPath());
        $this->assertSame("limit=100",$uri->getQuery());
        $this->assertSame("GET", $request->getMethod());

        /** @var Request **/
        $request = $this->history[1]["request"];
        $uri = $request->getUri();
        $this->assertSame("/abc0", $uri->getPath());
        $this->assertSame("a=123",$uri->getQuery());
        $this->assertSame("GET", $request->getMethod());
    }

    public function testPaginatedResponseWithItemIterator(){
        $devices = $this->setPaginatedResponses(); 

        $response = $this->client->devices()->list();
        $items = iterator_to_array($response->items());

        $serializer = new ClassSerializer(Device::class);
        foreach($items as $itemKey=> $item){
            $items[$itemKey] = $serializer->serialize($item);
        }
        $this->assertArraySimilar($devices, $items);

        $this->assertCount(2, $this->history);
        /** @var Request **/
        $request = $this->history[0]["request"];
        $uri = $request->getUri();
        $this->assertSame("/devices/", $uri->getPath());
        $this->assertSame("GET", $request->getMethod());

        /** @var Request **/
        $request = $this->history[1]["request"];
        $uri = $request->getUri();
        $this->assertSame("/abc0", $uri->getPath());
        $this->assertSame("a=123",$uri->getQuery());
        $this->assertSame("GET", $request->getMethod());
    }

    public function testPaginatedResponseWithPageIteratorCached(){
        $devices = $this->setPaginatedResponses();
        $expected = array_chunk($devices, 5); 

        $response = $this->client->devices()->list();
        $response->enableCache();
        $pageIterator = $response->pages();
        $pages = iterator_to_array($pageIterator);
        $pages = iterator_to_array($pageIterator);

        $serializer = new ClassSerializer(Device::class);
        foreach($pages as $pageKey=> $page){
            foreach($page as $itemKey=> $item){
                $pages[$pageKey][$itemKey] = $serializer->serialize($item);
            }
        }
        $this->assertArraySimilar($expected, $pages);

        $this->assertCount(2, $this->history); 
    }

    public function testPaginatedResponseWithPageIteratorCachedContinue(){
        $devices = $this->setPaginatedResponses(3);
        $expected = array_chunk($devices, 5); 

        $response = $this->client->devices()->list();
        $response->enableCache();
        $pageIterator = $response->pages();
        $page = 0;
        foreach($pageIterator as $items){
            if($page==1){
                break;
            }
            $page++;
        }
        $this->assertCount(2, $this->history);
        $this->assertSame("/devices/", $this->history[0]["request"]->getUri()->getPath());
        $this->assertSame("/abc0", $this->history[1]["request"]->getUri()->getPath());
        $pages = iterator_to_array($pageIterator);

        $serializer = new ClassSerializer(Device::class);
        foreach($pages as $pageKey=> $page){
            foreach($page as $itemKey=> $item){
                $pages[$pageKey][$itemKey] = $serializer->serialize($item);
            }
        }
        $this->assertArraySimilar($expected, $pages);
        $this->assertCount(3, $this->history);
        $this->assertSame("/abc1", $this->history[2]["request"]->getUri()->getPath());
    }
}
