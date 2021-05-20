<?php

namespace Arimac\Sigfox\Test\Unit;

use Arimac\Sigfox\Response\Paginated\ItemIterator;
use ArrayIterator;
use PHPUnit\Framework\TestCase;

class ItemIteratorTest extends TestCase {

    /**
     * @dataProvider provideItemIteratorData
     */
    public function testItemIterator($input, $expected){
        $iterator = new ArrayIterator($input);
        $itemIterator = new ItemIterator($iterator);
        $arr = iterator_to_array($itemIterator);
        $this->assertSame($expected, $arr);
    }

    public function provideItemIteratorData(){
        return [
            [
                [
                    [1,2,3,4,5,6],
                    [7,8,9],
                    [10,11,12,13,14]
                ],
                [1,2,3,4,5,6,7,8,9,10,11,12,13,14]
            ],
            [
                [
                    [],
                    [1,2,3,4,5,6],
                    [],
                    [7,8,9],
                    [10,11,12,13,14],
                    []
                ],
                [1,2,3,4,5,6,7,8,9,10,11,12,13,14]
            ],
            [
                [
                    [1,2,3,4,5,6],
                    [7,8,9],
                    [10,11,12,13,14,[]],
                ],
                [1,2,3,4,5,6,7,8,9,10,11,12,13,14,[]]
            ]
        ];
    }
}
