# Currency formatting and conversion package for Laravel.

[![Release](https://img.shields.io/packagist/v/spinzar/money?label=release)](https://github.com/spinzar/money/releases)
![Downloads](https://img.shields.io/packagist/dt/spinzar/money)
![Tests](https://img.shields.io/github/workflow/status/spinzar/money/Tests?label=tests)
[![StyleCI](https://github.styleci.io/repos/310012922/shield?branch=main)](https://github.styleci.io/repos/310012922?branch=main)
[![Quality](https://img.shields.io/scrutinizer/quality/g/spinzar/money?label=quality)](https://scrutinizer-ci.com/g/spinzar/money)
[![License](https://img.shields.io/github/license/spinzar/money)](LICENSE.md)

This package intends to provide tools for formatting and conversion monetary values in an easy, yet powerful way for Laravel projects.

### Why not use the moneyphp package?

Because `moneyphp` uses the `intl` extension for number formatting. `intl` extension isn't present by default on PHP installs and can give [different results](http://moneyphp.org/en/latest/features/formatting.html#intl-formatter) in different servers.

## Getting Started

### 1. Install

Run the following command:

```bash
composer require spinzar/money
```

### 2. Register (for Laravel < 5.5)

Register the service provider in `config/app.php`

```php
Spinzar\Money\Provider::class,
```

### 3. Publish

Publish config file.

```bash
php artisan vendor:publish --tag=money
```


### 4. Configure

You can change the currencies information of your app from `config/money.php` file

## Usage

```php
use Spinzar\Money\Currency;
use Spinzar\Money\Money;

echo Money::USD(500); // '$5.00' unconverted
echo new Money(500, new Currency('USD')); // '$5.00' unconverted
echo Money::USD(500, true); // '$500.00' converted
echo new Money(500, new Currency('USD'), true); // '$500.00' converted
```

### Advanced

```php
$m1 = Money::USD(500);
$m2 = Money::EUR(500);

$m1->getCurrency();
$m1->isSameCurrency($m2);
$m1->compare($m2);
$m1->equals($m2);
$m1->greaterThan($m2);
$m1->greaterThanOrEqual($m2);
$m1->lessThan($m2);
$m1->lessThanOrEqual($m2);
$m1->convert(Currency::GBP, 3.5);
$m1->add($m2);
$m1->subtract($m2);
$m1->multiply(2);
$m1->divide(2);
$m1->allocate([1, 1, 1]);
$m1->isZero();
$m1->isPositive();
$m1->isNegative();
$m1->format();
```

### Helpers

```php
money(500, 'USD')
currency('USD')
```

### Blade Directives

```php
@money(500, 'USD')
@currency('USD')
```

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Pull requests are more than welcome. You must follow the PSR coding standards.

## Security

If you discover any security related issues, please email security@spinzar.co instead of using the issue tracker.

## Credits

- [Nassim Nasibullah](https://github.com/spinzar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
