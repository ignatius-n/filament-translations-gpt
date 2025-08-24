<?php

use Filament\Facades\Filament;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\Pages\ListTranslations;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\Pages\ManageTranslations;
use TomatoPHP\FilamentTranslations\Filament\Resources\Translations\TranslationResource;
use TomatoPHP\FilamentTranslations\FilamentTranslationsPlugin;
use TomatoPHP\FilamentTranslationsGpt\FilamentTranslationsGptPlugin;
use TomatoPHP\FilamentTranslationsGpt\Tests\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

beforeEach(function () {
    actingAs(User::factory()->create());

    $this->panel = Filament::getCurrentOrDefaultPanel();

    $this->panel->plugin(
        FilamentTranslationsPlugin::make()
            ->allowCreate()
            ->allowClearTranslations()
    );

    $this->panel->plugin(
        FilamentTranslationsGptPlugin::make()
    );

});

it('can render translation resource', function () {
    get(TranslationResource::getUrl())->assertSuccessful();
});

it('can render translation gpt button', function () {
    if (config('filament-translations.modal')) {
        livewire(ManageTranslations::class)
            ->mountAction('gpt')
            ->assertSuccessful();
    } else {
        livewire(ListTranslations::class)
            ->mountAction('gpt')
            ->assertSuccessful();
    }
});
