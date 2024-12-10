# Laravel integration for OMISE payment service

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/treasurer.svg?style=flat-square)](https://packagist.org/packages/soap/treasurer)
[![run-tests](https://github.com/soap/treasurer/actions/workflows/run-tests.yml/badge.svg)](https://github.com/soap/treasurer/actions/workflows/run-tests.yml)
[![Check & fix styling](https://github.com/soap/treasurer/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/soap/treasurer/actions/workflows/php-cs-fixer.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/treasurer.svg?style=flat-square)](https://packagist.org/packages/soap/treasurer)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/treasurer.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/treasurer)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require soap/treasurer
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="treasurer-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="treasurer-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="treasurer-views"
```

This is the contents of the published config file:

```php
return [

    'url' => 'https://api.omise.co',

    'live_public_key' => env('OMISE_LIVE_PUBLIC_KEY', ''),
    'live_secret_key' => env('OMISE_LIVE_SECRET_KEY', ''),

    'test_public_key' => env('OMISE_TEST_PUBLIC_KEY', ''),
    'test_secret_key' => env('OMISE_TEST_SECRET_KEY', ''),

    'api_version' => env('OMISE_API_VERSION', '2019-05-29'),

    'sanbox_status' => env('OMISE_SANDBOX_STATUS', true),
];
```

## Usage

Firstly, you have to register for OMISE payment service. Then fill in your keys in .env file.

You can retreive Public key or Secret key like this (it will provide LIVE or TEST key depending on your configuration.)
```php
$treasurer = app(\Soap\Treasurer\Treasure::class);

$publicKey = $treasurer->getPublicKey();
$secretKey = $treasurer->getSecretKey();

```
### Note for all Omise wrapper classes, like Charge, Customer, Account etc.
When you make a call to each API call, the object will have access to response array using $object->$key or $object->$key(). These keys are provided in response API array by Omise.
For example Charge API response array will be:
```php
#_values => [
  'object' => 'charge',
  'id' => 'chrg_tes_6131313133131344',
  'amount' => 2000,
  'fee_vat' => 51, 
   ...   
];
```
Then you can get them like this:
```php
  $charge->amount(); // $charge->amount;
  $charg->feeVat(); // $charge->fee_vat;
```
For each of Omise wrapper class, you can call without worry about Public key and Secret key. And the package (early version) provides an ease way to get return values from Omise like above.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
