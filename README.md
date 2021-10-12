# Spotify SDK for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zhyltix/laravelspotify.svg?style=flat-square)](https://packagist.org/packages/zhyltix/laravelspotify)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zhyltix/laravelspotify/run-tests?label=tests)](https://github.com/zhyltix/laravelspotify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/zhyltix/laravelspotify/Check%20&%20fix%20styling?label=code%20style)](https://github.com/zhyltix/laravelspotify/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zhyltix/laravelspotify.svg?style=flat-square)](https://packagist.org/packages/zhyltix/laravelspotify)

---

## Installation

You can install the package via composer:

```bash
composer require zhyltix/laravelspotify
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Zhyltix\Spotify\SpotifyServiceProvider" --tag="laravelspotify-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Zhyltix\Spotify\SpotifyServiceProvider" --tag="laravelspotify-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravelspotify = new Zhyltix\Spotify();
echo $laravelspotify->echoPhrase('Hello, Zhyltix!');
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

- [Joey Roeters](https://github.com/Zhyltix)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
