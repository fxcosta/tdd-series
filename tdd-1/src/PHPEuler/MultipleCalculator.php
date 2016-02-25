<?php

namespace PHPEuler;

class MultipleCalculator
{
    public function sum($limit)
    {
        $sum = 0;

        for($i = 0; $i < $limit; $i++) {
            if($i % 3 == 0 || $i % 5 == 0) {
                $sum += $i;
            }
        }

        return $sum;
    }
}