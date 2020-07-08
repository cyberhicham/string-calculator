<?php

namespace StringCalculator;


class StringCalculator
{
    public function add(string $numbers): int
    {
        $separator = ',';

        $pattern = "#//(.+)\n#U";

        if(preg_match($pattern, $numbers, $matches)) {

            $separator = $matches[1];

            $numbers = substr($numbers, strlen($matches[0]));
        }


        $pattern = '#(\[(.*)\])+#U';

        if (preg_match_all($pattern, $separator,$matches)) {
            $separators = $matches[2];
            $numbers = str_replace($separators,$separators[0],$numbers);
            $separator = $separators[0];
        }

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
