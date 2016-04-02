<?php

namespace PHPEuler;

class MultipleCalculator
{
    public function sum($limit)
    {
        $sum = 0;

        for($iterator = 0; $iterator < $limit; $iterator++) {
            $sum += $this->isDivisible($iterator);
        }

        return $sum;
    }

    /**
     * @param $number
     * @return mixed
     */
    private function isDivisible($number)
    {
        if($number % 3 == 0 || $number % 5 == 0)
            return $number;
    }
}