# Laravel Twillio SMS API Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/combindma/laravel-twilio.svg?style=flat-square)](https://packagist.org/packages/combindma/laravel-twilio)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/combindma/laravel-twilio/run-tests?label=tests)](https://github.com/combindma/laravel-twilio/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/combindma/laravel-twilio/Check%20&%20fix%20styling?label=code%20style)](https://github.com/combindma/laravel-twilio/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/combindma/laravel-twilio.svg?style=flat-square)](https://packagist.org/packages/combindma/laravel-twilio)

Laravel Twillio SMS API IntegrationLaravel Twillio SMS API Integration

## Installation

You can install the package via composer:

```bash
composer require combindma/laravel-twilio
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-twilio-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$twilio = new Combindma\Twilio();
echo $twilio->echoPhrase('Hello, Combindma!');
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](https://github.com/combindma/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Combind](https://github.com/combindma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
