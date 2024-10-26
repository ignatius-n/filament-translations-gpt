<?php

namespace TomatoPHP\FilamentTranslationsGpt;

use Filament\Contracts\Plugin;
use Filament\Panel;
use TomatoPHP\FilamentTranslations\Filament\Resources\TranslationResource\Actions\ManagePageActions;
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
        ManagePageActions::register(GPTTranslationAction::make());
    }

    public static function make(): self
    {
        return new FilamentTranslationsGptPlugin;
    }
}
