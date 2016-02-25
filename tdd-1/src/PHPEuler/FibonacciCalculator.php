<?php

namespace PHPEuler;

class FibonacciCalculator
{
    public function sum($limit)
    {
        $sum = 0;
        $sequence = FibonacciSequenceGenerator::createUntil($limit);

        foreach($sequence as $value) {
            if($value % 2 == 0) {
                $sum += $value;
            }
        }

        return $sum;
    }
}