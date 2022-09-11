# Laravel integration with Wikidata Sparql API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wigeeky/laravel-wikidata.svg?style=flat-square)](https://packagist.org/packages/wigeeky/laravel-wikidata)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wigeeky/laravel-wikidata/run-tests?label=tests)](https://github.com/wigeeky/laravel-wikidata/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/wigeeky/laravel-wikidata/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/wigeeky/laravel-wikidata/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/wigeeky/laravel-wikidata.svg?style=flat-square)](https://packagist.org/packages/wigeeky/laravel-wikidata)

This Laravel package assists with getting data from Wikidata's SPARQL APIs. 

## Installation

You can install the package via composer:

```bash
composer require wigeeky/laravel-wikidata
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-wikidata-config"
```

This is the contents of the published config file:

```php
return [
    'base_url' => 'https://query.wikidata.org/sparql?query=',
];
```

## Usage

```php
use WiGeeky\Wikidata\Facades\Wikidata;
$query = "SELECT ?country ?code ?flag WHERE {?item wdt:P31 wd:Q3624078 . ?item wdt:P474 ?code . ?item wdt:P297 ?country .  ?item wdt:P41 ?flag}";

$collection = Wikidata::get($query);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mohammad H. Maazallahi](https://github.com/WiGeeky)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
