<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use StringCalculator\RegexTraining;

class RegexTrainingTest extends TestCase
{
    public function testStringContainsAnother()
    {
        $regex = new RegexTraining;

        $string = "My name is Hicham";
        $needle = "name is";

        $this->assertSame(1, $regex->stringContainsAnother($string, $needle), "the <<'{$string}'>> should contains <<'{$needle}'>>");
    }

    public function testStringWithoutLastWord()
    {
        $regex = new RegexTraining;

        //var_dump($regex->stringWithoutLastWord('my name is hicham'));

        $string = "The quick brown fox";
        $string_without_last_word = "The quick brown";

        $this->assertSame($string_without_last_word, $regex->stringWithoutLastWord($string), "the two string should  be  the same : <<'{$string_without_last_word}'>>");
    }
}
