<?php
include_once 'index.php';
use PHPUnit\Framework\TestCase;

class TestSort extends TestCase{
    function testTestSort(){
        $arr = [1,9,4.5,6.6,5.7,-4.5];
        $expect = [-4.5,1,4.5,5.7,6.6,9];
        $result = selectionSort($arr);
        $this->assertEquals($result, $expect);
    }
}
