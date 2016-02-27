<?php

namespace PHPEuler;

class GreatestCommonDivisorTest extends \PHPUnit_Framework_TestCase
{
    public function testObterMaiorDivisorComumEntreTrintaSeisENoventa()
    {
        $expected = 18;

        $result = GreatestCommonDivisor::find(36, 90);

        $this->assertEquals($expected, $result);
    }
}
