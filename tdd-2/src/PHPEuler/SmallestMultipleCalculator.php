<?php

namespace PHPEuler;

class SmallestMultipleCalculator
{
    public function findSmallest($limit)
    {
        $numbers = [];

        for($i = 1; $i < $limit; $i++) {
            $numbers[] = $i;
        }

        while(2 <= count($numbers)) {
            array_push($numbers, $this->leastCommumMultiple(array_shift($numbers), array_shift($numbers)));
        }

        return reset($numbers);
    }

    /**
     * @param $elementOne
     * @param $elementTwo
     * @return mixed
     */
    private function leastCommumMultiple($elementOne, $elementTwo)
    {
        return $elementTwo * ($elementOne / GreatestCommonDivisor::find($elementOne, $elementTwo));
    }
}
