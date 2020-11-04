<?php

use Spinzar\Money\Currency;
use Spinzar\Money\Money;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function testMoney()
    {
        $this->assertEquals(new Currency('USD'), currency('USD'));
        $this->assertEquals(new Currency('JPY'), currency('JPY'));
    }

    public function testCurrency()
    {
        $this->assertEquals(new Money(25, new Currency('USD')), money(25, 'USD'));
        $this->assertEquals(new Money(25, new Currency('JPY')), money(25, 'JPY'));
    }
}
