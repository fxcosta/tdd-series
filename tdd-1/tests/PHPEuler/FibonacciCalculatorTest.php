<?php

namespace PHPEuler;

class FibonacciCalculatorTest extends \PHPUnit_Framework_Testcase
{
    public function testPairSequenceOfTermsFibonacciUpToOneMillion()
    {
        $expected = 44;
        $calculator = new FibonacciCalculator();

        $result = $calculator->sum(10);

        $this->assertEquals($expected, $result);
    }
}