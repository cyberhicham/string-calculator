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
            $numbers = substr($numbers,4);
        }



        return array_sum(explode($separator, $numbers));
    }
}
