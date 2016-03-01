<?php

namespace PHPEuler;

class FibonacciSequenceGeneratorTest extends \PHPUnit_Framework_Testcase
{
    public function testFibonacciSequenceUpToTen()
    {
        $expected = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89];

        $result = FibonacciSequenceGenerator::createUntil(10);

        $this->assertEquals($expected, $result);
    }
}