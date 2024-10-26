![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-translations-gpt/master/art/screenshot.jpg)

# Filament translations gpt

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-translations-gpt/version.svg)](https://packagist.org/packages/tomatophp/filament-translations-gpt)
[![License](https://poser.pugx.org/tomatophp/filament-translations-gpt/license.svg)](https://packagist.org/packages/tomatophp/filament-translations-gpt)
[![Downloads](https://poser.pugx.org/tomatophp/filament-translations-gpt/d/total.svg)](https://packagist.org/packages/tomatophp/filament-translations-gpt)

Translations Manager extension to use ChatGPT openAI to auto translate your __(), trans() fn

## Installation

before install this package you need to have [Translation Manager](https://www.github.com/tomatophp/filament-translations) installed and configured

```bash
composer require tomatophp/filament-translations-gpt
```
after install your package please run this command

```bash
php artisan filament-translations-gpt:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentTranslationsGpt\FilamentTranslationsGptPlugin::make())
```

## Usage

now you need to add the following to your `.env` file:

```bash
OPENAI_API_KEY=
OPENAI_ORGANIZATION=
```

now you need to clear you cache

```bash
php artisan config:clear
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-translations-gpt-config"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-translations-gpt-lang"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
