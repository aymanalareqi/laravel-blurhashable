# This is my package laravel-blurhashable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alareqi/laravel-blurhashable.svg?style=flat-square)](https://packagist.org/packages/alareqi/laravel-blurhashable)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alareqi/laravel-blurhashable/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alareqi/laravel-blurhashable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alareqi/laravel-blurhashable/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alareqi/laravel-blurhashable/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alareqi/laravel-blurhashable.svg?style=flat-square)](https://packagist.org/packages/alareqi/laravel-blurhashable)

Handle image blurhash automatically with minimum configurations


## Installation

You can install the package via composer:

```bash
composer require alareqi/laravel-blurhashable
```

just add the $blurhashable array to model 
```php
use Alareqi\LaravelBlurhashable\Traits\HasBlurhash;

class Project extends Model
{
    use HasBlurhash;
    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'image_blurhash',
        'mobile_image',
        'mobile_image_blurhash',
        'type',
        'url',
        'status'
    ];

    protected $blurhashable = [
        'image' => 'image_blurhash',
        'mobile_image' => 'mobile_image_blurhash'
    ];
```



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ayman Alareqi](https://github.com/aymanalareqi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
