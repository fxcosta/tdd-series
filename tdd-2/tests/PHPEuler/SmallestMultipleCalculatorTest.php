<?php

namespace PHPEuler;

class SmallestMultipleCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSmallestMultipleFromOneToTen()
    {
        $expected = 2520;
        $calculator = new SmallestMultipleCalculator();

        $result = $calculator->findSmallest(10);

        $this->assertEquals($expected, $result);
    }
}