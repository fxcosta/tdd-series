<?php

namespace PHPEuler;

class FibonacciCalculatorTest extends \PHPUnit_Framework_Testcase
{
    public function testSomaTermosParesSequenciaFibonacciAteUmMilhao()
    {
        $expected = 44;
        $calculator = new FibonacciCalculator();

        $result = $calculator->sum(10);

        $this->assertEquals($expected, $result);
    }
}