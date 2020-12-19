<?php

use App\Exceptions\CustomException;
use App\Percents\CompoundPercent;
use PHPUnit\Framework\TestCase;

class CompoundPercentTest extends TestCase
{
    private CompoundPercent $instance;

    public function setUp() : void
    {
        $this->instance = new CompoundPercent();
    }

    public function testAmountOfDebt()
    {
        $this->assertEquals(120, $this->instance->amountOfDebt(30, 100, 2));
    }

    public function testException(){
        $this->expectException(CustomException::class);
        $this->instance->amountOfDebt(3,3, '55');
    }
}
