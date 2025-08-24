<?php

namespace TomatoPHP\FilamentTranslationsGpt;

use Filament\Panel;
use Filament\Contracts\Plugin;
use TomatoPHP\FilamentTranslations\Facade\FilamentTranslations;
use TomatoPHP\FilamentTranslationsGpt\Filament\Actions\GPTTranslationAction;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\Pages\ListTranslations;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\Pages\ManageTranslations;

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
