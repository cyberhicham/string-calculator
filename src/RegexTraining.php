<?php

namespace StringCalculator;


class RegexTraining
{
    public function stringContainsAnother(string $string, string $needle): int
    {
        $pattern = "/{$needle}/";

        if(! preg_match($pattern, $string))
        {
            return false;
        }

        return true;
    }

    public function stringWithoutLastWord(string $string): string
    {
        $pattern = "/\s+/";

        if (preg_match_all($pattern, $string, $matches)) {
            var_dump(end($matches)[0]);
        }
        //var_dump($matches);

        /*$replacement = "";
        $subject = "";
        $limit =

        return preg_replace ($pattern, $replacement, $subject, $limit = -1, &$count = null)*/

        return "!";
    }
}
