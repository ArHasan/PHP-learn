<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase{
    function testSomething(){
        $result = 3+2;
        $this->assertEquals(4,$result);
    }
}