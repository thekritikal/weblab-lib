<?php

use App\Exceptions\CustomException;
use App\Percents\SimplePercent;
use PHPUnit\Framework\TestCase;

class SimplePercentTest extends TestCase
{
    private SimplePercent $instance;

    public function setUp() : void
    {
        $this->instance = new SimplePercent();
    }

    public function testAmountOfDebt()
    {
        $this->assertEquals(36550, $this->instance->amountOfDebt(50, 200, 365));
    }

    public function testException(){
        $this->expectException(CustomException::class);
        $this->instance->amountOfDebt(3,3, '55');
    }
}
