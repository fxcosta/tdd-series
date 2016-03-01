<?php

namespace PHPEuler;

class LargestPrimeFactorTest extends \PHPUnit_Framework_TestCase
{
    public function testMaiorFatorPrimoCincoSeteTrezeEVinteNove()
    {
        $expected = 6857;
        $calculator = new LargestPrimeFactor();

        $result = $calculator->findLargest(600851475143);

        $this->assertEquals($expected, $result);
    }
}
