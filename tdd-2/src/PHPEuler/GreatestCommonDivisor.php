<?php

namespace PHPEuler;

class GreatestCommonDivisor
{
    public static function find($elementOne, $elementTwo)
    {
        $elementOne = abs($elementOne);
        $elementTwo = abs($elementTwo);

        if($elementOne == 0 and $elementTwo == 0) {
            return 1;
        }

        if($elementOne == $elementTwo && $elementOne >= 1) {
            return $elementOne;
        }

        if($elementTwo < $elementOne) {
            return self::find($elementOne - $elementTwo, $elementOne);
        }

        return self::find($elementOne, $elementTwo - $elementOne);
    }
}