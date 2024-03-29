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
];
```

## Usage

```php
$treasurer = new Soap\Treasurer();
echo $treasurer->echoPhrase('Hello, Soap!');
```

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
