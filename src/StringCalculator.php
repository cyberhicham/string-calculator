<?php

namespace StringCalculator;


class StringCalculator
{
    public function add(string $numbers): int
    {
        $separator = ',';

        $numbers  = str_replace("\n", ',', $numbers);

        if(strpos($numbers, '//') === 0) {
            $separator = $numbers[2];
            $numbers = substr($numbers, 4);
        }

        $numbers = explode($separator, $numbers);

        foreach ($numbers as $key => $number) {
            if ($number < 0) {
                $negatives[] = $number;
            }

            if ($number > 1000) {
                unset($numbers[$key]);
            }
        }

        if(! empty($negatives)) {
            throw new \Exception('negatives not allowed: '. implode(' ', $negatives));
        }

        return array_sum($numbers);
    }
}
