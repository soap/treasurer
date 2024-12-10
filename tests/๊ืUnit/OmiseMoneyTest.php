<?php

use Soap\Treasurer\Omise\Helpers\OmiseMoney;

it('can convert amount of ideal input', function () {
    $amount = 845;
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(84500);
});

it('can convert amount with decimal input', function () {
    $amount = 350.49;
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(35049);
});

it('can convert amount with 4 decimal points', function () {
    $amount = 4780.0405;
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(478004.05);
});

it('can convert amount with 123456789 as decimals', function () {
    $amount = 688.123456789;
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(68812.3456789);
});

it('can convert amount with 987654321 as decimals', function () {
    $amount = 14900.987654321;
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(1490098.7654321);
});

it('can convert string as numeric', function () {
    $amount = '5400';
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(540000);
});

it('can convert amount with unsupported currency', function () {
    $amount = 100;
    $currency = 'unsupported';

    expect(fn () => OmiseMoney::toSubunit($amount, $currency))->toThrow(Exception::class);
});

it('can convert amount with invalid amount type', function () {
    $amount = 'invalid';
    $currency = 'thb';

    expect(fn () => OmiseMoney::toSubunit($amount, $currency))->toThrow(Exception::class);
});

it('can convert AUD to subunit', function () {
    $amount = 100;
    $currency = 'aud';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert CAD to subunit', function () {
    $amount = 100;
    $currency = 'cad';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert CHF to subunit', function () {
    $amount = 100;
    $currency = 'chf';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert CNY to subunit', function () {
    $amount = 100;
    $currency = 'cny';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert DKK to subunit', function () {
    $amount = 100;
    $currency = 'dkk';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert EUR to subunit', function () {
    $amount = 100;
    $currency = 'eur';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert GBP to subunit', function () {
    $amount = 100;
    $currency = 'gbp';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert HKD to subunit', function () {
    $amount = 100;
    $currency = 'hkd';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert JPY to subunit', function () {
    $amount = 100;
    $currency = 'jpy';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(100);
});

it('can convert MYR to subunit', function () {
    $amount = 100;
    $currency = 'myr';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert SGD to subunit', function () {
    $amount = 100;
    $currency = 'sgd';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert THB to subunit', function () {
    $amount = 100;
    $currency = 'thb';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});

it('can convert USD to subunit', function () {
    $amount = 100;
    $currency = 'usd';

    expect(OmiseMoney::toSubunit($amount, $currency))->toEqual(10000);
});
