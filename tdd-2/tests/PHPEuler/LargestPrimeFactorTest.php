<?php

namespace PHPEuler;

class LargestPrimeFactorTest extends \PHPUnit_Framework_TestCase
{
    public function testLargestPrimeFactorThirteenThousandOneHundredNinityFive()
    {
        $expected = 29;
        $calculator = new LargestPrimeFactor();

        $result = $calculator->findLargest(13195);

        $this->assertEquals($expected, $result);
    }
}
