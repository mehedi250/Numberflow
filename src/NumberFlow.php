<?php
namespace mehedi250\numberflow;

class NumberFlow
{
    public function removeExtraZero(float $number)
    {
        $pos = strpos($number, '.');
        if ($pos === false) { // it is integer number
            return $number;
        } else { // it is decimal number
            return rtrim(rtrim($number, '0'), '.');
        }
    }

    public function fixDecimalPoint(float $number, int $point)
    {
        return number_format($number, $point, '.', '');
    }
}
