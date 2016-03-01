<?php

namespace PHPEuler;

class GreatestCommonDivisorTest extends \PHPUnit_Framework_TestCase
{
    public function testGreatestCommonDivisorBetweenThirtySixAndNinety()
    {
        $expected = 18;

        $result = GreatestCommonDivisor::find(36, 90);

        $this->assertEquals($expected, $result);
    }
}
