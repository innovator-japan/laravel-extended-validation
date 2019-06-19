<?php

namespace InnovatorJapan\LaravelExtendedValidation;

class ValidationServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/rules')
        ]);

        $this->loadTranslationsFrom(
            __DIR__ . '/resources/lang/',
            'validationRules'
        );
    }
}
