# Laravel Twillio SMS API Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/combindma/laravel-twilio.svg?style=flat-square)](https://packagist.org/packages/combindma/laravel-twilio)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/combindma/laravel-twilio/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/combindma/laravel-twilio/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/combindma/laravel-twilio/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/combindma/laravel-twilio/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
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
    /*
    |--------------------------------------------------------------------------
    | SID
    |--------------------------------------------------------------------------
    |
    | Your Twilio Account SID #
    |
    */
    'sid' => env('TWILIO_SID', ''),

    /*
    |--------------------------------------------------------------------------
    | Access Token
    |--------------------------------------------------------------------------
    |
    | Access token that can be found in your Twilio dashboard
    |
    */
    'token' => env('TWILIO_AUTH_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | From Number
    |--------------------------------------------------------------------------
    |
    | The Phone number registered with Twilio that your SMS & Calls will come from
    |
    */
    'from' => env('TWILIO_NUMBER', ''),
    
     /*
    |--------------------------------------------------------------------------
    | Whatsapp Number
    |--------------------------------------------------------------------------
    |
    | The Phone number registered with Twilio that your Whatsapp Messages will come from
    |
    */
    'whatsapp' => env('TWILIO_WHATSAPP', ''),

    /*
   |--------------------------------------------------------------------------
   | Enable
   |--------------------------------------------------------------------------
   |
   | Enable or disable script rendering. Useful for local development.
   |
   */
    'enabled' => env('TWILIO_ENABLED', true),
];
```

## Usage

```php
use Combindma\Twilio\Facades\Twilio;

//Simple SMS message
Twilio::message($phone, $message);

//Send a Message with a Messaging Service
Twilio::messageWithService($phone, $message, $serviceId);

//Send a message with WhatsApp
Twilio::whatsapp($phone, $message);

//Send a WhatsApp message using a message template & service
$content = [
 "1" => "Name",
 "2" => "link",
]
Twilio::whatsappWithTemplate($phone, $serviceId, $templateId, array $content);
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
