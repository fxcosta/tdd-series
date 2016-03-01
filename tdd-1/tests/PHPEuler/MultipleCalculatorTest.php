<?php

namespace PHPEuler;

class MultipleCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiplesSumOfThreeAndFiveUpToTen()
    {
        $expected = 23;
        $calculator = new MultipleCalculator();

        $result = $calculator->sum(10);

        $this->assertEquals($expected, $result);
    }
}