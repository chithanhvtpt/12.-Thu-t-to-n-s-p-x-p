<?php

use PHPUnit\Framework\TestCase;

class InsertSortTest extends TestCase
{
   function testInsertSort() {
       $arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
       $expect = [9, 8, 7, 5, 3, 2, 2, 1, 0, -4];
       $result = insertionSort($arr);
       $this->assertEquals($result, $expect);
   }
}



