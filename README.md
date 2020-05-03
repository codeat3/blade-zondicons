# Blade Zondicons

<a href="https://github.com/blade-ui-kit/blade-zondicons/actions"><img src="https://github.com/blade-ui-kit/blade-zondicons/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/blade-ui-kit/blade-zondicons"><img src="https://poser.pugx.org/blade-ui-kit/blade-zondicons/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/blade-ui-kit/blade-zondicons"><img src="https://poser.pugx.org/blade-ui-kit/blade-zondicons/v/stable.svg" alt="Latest Stable Version"></a>

A package to easily make use of [Zondicons](http://www.zondicons.com) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](./resources/svg).

## Requirements

- PHP 7.2 or higher
- Laravel 7.6 or higher

## Installation

```bash
composer require blade-ui-kit/blade-zondicons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-zondicon-cloud/>
```

You can also pass classes to your icon components:

```blade
<x-zondicon-cloud class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-zondicon-cloud style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-zondicon-cloud/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-zondicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-zondicons/cloud.svg') }}" width="10" height="10"/>
```

### Blade Icons

Blade Zondicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Zondicons is developed and maintained by [Dries Vints](https://driesvints.com).

## License

Blade Zondicons is open-sourced software licensed under [the MIT license](LICENSE.md).
