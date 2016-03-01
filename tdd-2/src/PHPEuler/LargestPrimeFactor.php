<?php

namespace PHPEuler;

class LargestPrimeFactor
{
    public function findLargest($number)
    {
        $lpf = 2;

        while($number > $lpf) {
            if($number % $lpf == 0) {
                $number = $number / $lpf;
                $lpf = 2;
            } else {
                $lpf += 1;
            }
        }

        return $lpf;
    }
}