# This is my package jmeryar-theme

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xoshbin/jmeryar-theme.svg?style=flat-square)](https://packagist.org/packages/xoshbin/jmeryar-theme)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/xoshbin/jmeryar-theme/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/xoshbin/jmeryar-theme/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/xoshbin/jmeryar-theme/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/xoshbin/jmeryar-theme/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/xoshbin/jmeryar-theme.svg?style=flat-square)](https://packagist.org/packages/xoshbin/jmeryar-theme)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require xoshbin/jmeryar-theme
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="jmeryar-theme-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="jmeryar-theme-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="jmeryar-theme-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$jmeryarTheme = new Xoshbin\JmeryarTheme();
echo $jmeryarTheme->echoPhrase('Hello, Xoshbin!');
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

- [Khoshbin](https://github.com/Xoshbin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
