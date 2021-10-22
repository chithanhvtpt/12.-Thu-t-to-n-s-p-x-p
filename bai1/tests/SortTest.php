<?php
include_once '../app/index.php';

use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
    function testSortBubbleTrue()
    {
        $list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
        $expected = [-2, 1, 2, 2, 3, 3, 5, 6, 12, 14];
        $result = bubbleSort($list);
        $this->assertEquals($result, $expected);
    }

    function testSrtBubbleFalse()
    {
        $list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
//        [2,2,3,5,
        $expected = [-2, 2, 1, 2, 3, 3, 5, 6, 12, 14];
        $result = bubbleSort($list);
        $this->assertNotEquals(implode($expected), implode($result));
    }
}
