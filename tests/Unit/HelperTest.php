<?php

namespace Arimac\Sigfox\Test\Unit;

use Arimac\Sigfox\Helper;
use PHPUnit\Framework\TestCase;
use stdClass;

class Fooo {}

class HelperTest extends TestCase
{
    /**
     * @dataProvider provideArrayFilterKeysData
     */
    public function testArrayFilterKeys(array $input, array $keys, array $expected)
    {
        $output = Helper::arrayFilterKeys($input, $keys);
        $this->assertSame($expected, $output);
    }

    public function provideArrayFilterKeysData()
    {
        return [
            [
                [
                    "a" => 1,
                    "b" => 2,
                    "c" => 3
                ],
                ["a", "b"],
                [
                    "a" => 1,
                    "b" => 2,
                ]
            ],
            [
                [
                    "a" => 1,
                    "b" => 2,
                    "c" => 3
                ],
                ["a", "b", "d"],
                [
                    "a" => 1,
                    "b" => 2,
                ]
            ],
            [
                [
                    "a" => 1,
                    "b" => 2,
                    "c" => 3
                ],
                [],
                []
            ]
        ];
    }

    /**
     * @dataProvider provideBindUrlParamsProvider
     */
    public function testBindUrlParams(string $url, array $params, string $expected)
    {
        $result = Helper::bindUrlParams($url, ...$params);
        $this->assertSame($expected, $result);
    }

    public function provideBindUrlParamsProvider()
    {
        return [
            ["/test/{test}/foo", [2], "/test/2/foo"],
            ["/test/{foo}/foo/{bar}", [2, 3], "/test/2/foo/3"],
            ["/test/foo", [], "/test/foo"]
        ];
    }

    /**
     * @dataProvider provideGetJSONSerializableErrorValueData
     */
    public function testGetJSONSerializableErrorValue($input, $expected){
        $value = Helper::getJSONSerializableErrorValue($input);
        $this->assertSame($value, $expected);
    }

    public function provideGetJSONSerializableErrorValueData(){
        $foo = new Fooo;
        return [
            [
                ["a"=>[$foo]],
                $foo
            ],
            [
                $foo,
                $foo
            ],
            [
                ["a"=>["b"=>true], "c"=> 3, "d"=>1.223, "c"=>[], "e"=>"f", "g"=> new stdClass, "h"=>null],
                null
            ]
        ];
    }
}
