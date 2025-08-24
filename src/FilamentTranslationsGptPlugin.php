<?php

namespace TomatoPHP\FilamentTranslationsGpt;

use Filament\Contracts\Plugin;
use Filament\Panel;
use TomatoPHP\FilamentTranslations\Facade\FilamentTranslations;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\Pages\ListTranslations;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\Pages\ManageTranslations;
use TomatoPHP\FilamentTranslationsGpt\Filament\Actions\GPTTranslationAction;

class FilamentTranslationsGptPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-translations-gpt';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        FilamentTranslations::register(GPTTranslationAction::make(), ManageTranslations::class);
        FilamentTranslations::register(GPTTranslationAction::make(), ListTranslations::class);
    }

    public static function make(): self
    {
        return new FilamentTranslationsGptPlugin;
    }
}
