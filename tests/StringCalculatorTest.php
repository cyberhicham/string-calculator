<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use StringCalculator\StringCalculator;

class StringCalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new StringCalculator;

        $this->assertSame(0, $calculator->add(""),'we should have 0 as a result');

        $this->assertSame(4, $calculator->add("4"),'we should have 4 as a result');

        $this->assertSame(3, $calculator->add("1,2"),'we should have 3 as a result');

        $this->assertSame(45, $calculator->add("1,2,3,4,5,6,7,8,9"),'we should have 45 as a result');

        $this->assertSame(6, $calculator->add("1\n2,3"),'we should have 6 as a result');

        $this->assertSame(3, $calculator->add("//;\n1;2"),'we should have 3 as a result');

        $this->assert(6, $calculator->add("1,-2,-3"),'error: negatives not allowed: -2 -3');

    }
}
