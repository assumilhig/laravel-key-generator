# A laravel package that generate a eloquent model keys

[![Latest Version on Packagist](https://img.shields.io/packagist/v/assumilhig/laravel-key-generator.svg?style=flat-square)](https://packagist.org/packages/assumilhig/laravel-key-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/assumilhig/laravel-key-generator.svg?style=flat-square)](https://packagist.org/packages/assumilhig/laravel-key-generator)
![GitHub Actions](https://github.com/assumilhig/laravel-key-generator/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require assumilhig/laravel-key-generator
```

You can publish everything with:

```php
php artisan vendor:publish --provider="Assumilhig\LaravelKeyGenerator\LaravelKeyGeneratorServiceProvider"
```

This is the contents of the published config file:

```php
return [
    'length' => 20
];
```
## Usage

There are two available methods to generate the key:

### Using the Laravel Key Generator
```php
LaravelKeyGenerator::generate(
    prefix: 'test', // what you want to prefix your keys with.
    length: 20, // optional - the default of 20 is set in the config.
)
```

### Using the Str Key
```php
Illuminate\Support\Str::Key(
    prefix: 'test', // what you want to prefix your keys with.
    length: 20, // optional - the default of 20 is set in the config.
)
```

## Eloquent Integration

There is an eloquent model trait available to use called `HasKey` which will:

```php
namespace App\Models;

use Assumilhig\LaravelKeyGenerator\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasKey;
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
      'key'
    ];
}

```
> When you are creating an eloquent model, the trait will be booted. It will get the first 3 characters of the Model name, force them to lowercase and append a "_" and use this as the prefix for the Key Factory

### An example:

**Category Model:** `cat_N6mU3u0aTgktLQnAsxwU`

Currently this isn't a configured option as it is easy to override or implement yourself.



### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email asumi0198@gmail.com instead of using the issue tracker.

## Credits

-   [Aljon Sumilhig](https://github.com/assumilhig)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
