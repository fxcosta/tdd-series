<?php

namespace PHPEuler;

class FibonacciSequenceGenerator
{
    public function createUntil($limit)
    {
        $sequence = [1, 2];

        for($iterator = 1; $iterator < $limit-1; $iterator++) {
            $sequence[] = $sequence[$iterator] + $sequence[$iterator-1];
        }

        return $sequence;
    }
}