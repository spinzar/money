<?php

use Spinzar\Money\Currency;
use Spinzar\Money\Money;

if (!function_exists('money')) {
    /**
     * Instance of money class.
     *
     * @param mixed  $amount
     * @param string $currency
     * @param bool   $convert
     *
     * @return \Spinzar\Money\Money
     */
    function money($amount, $currency = 'USD', $convert = false)
    {
        return new Money($amount, currency($currency), $convert);
    }
}

if (!function_exists('currency')) {
    /**
     * Instance of currency class.
     *
     * @param string $currency
     *
     * @return \Spinzar\Money\Currency
     */
    function currency($currency)
    {
        return new Currency($currency);
    }
}
