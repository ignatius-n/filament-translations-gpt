<?php

use TomatoPHP\FilamentTranslations\Filament\Resources\TranslationResource;
use TomatoPHP\FilamentTranslationsGpt\Tests\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

beforeEach(function () {
    actingAs(User::factory()->create());
});

it('can render translation resource', function () {
    get(TranslationResource::getUrl())->assertSuccessful();
});

it('can render translation gpt button', function () {
    if (config('filament-translations.modal')) {
        livewire(TranslationResource\Pages\ManageTranslations::class)
            ->mountAction('gpt')
            ->assertSuccessful();
    } else {
        livewire(\TomatoPHP\FilamentTranslations\Filament\Resources\TranslationResource\Pages\ListTranslations::class)
            ->mountAction('gpt')
            ->assertSuccessful();
    }
});
