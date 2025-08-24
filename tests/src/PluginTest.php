<?php

use Filament\Facades\Filament;
use TomatoPHP\FilamentTranslations\FilamentTranslationsPlugin;
use TomatoPHP\FilamentTranslationsGpt\FilamentTranslationsGptPlugin;

it('registers parent plugin', function () {
    $panel = Filament::getCurrentOrDefaultPanel();

    $panel->plugins([
        FilamentTranslationsPlugin::make(),
    ]);

    expect($panel->getPlugin('filament-translations'))
        ->not()
        ->toThrow(Exception::class);
});

it('registers plugin', function () {
    $panel = Filament::getCurrentOrDefaultPanel();

    $panel->plugins([
        FilamentTranslationsGptPlugin::make(),
    ]);

    expect($panel->getPlugin('filament-translations-gpt'))
        ->not()
        ->toThrow(Exception::class);
});
