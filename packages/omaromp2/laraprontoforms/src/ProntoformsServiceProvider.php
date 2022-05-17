<?php

namespace omaromp2\laraprontoforms;
use Illuminate\Support\ServiceProvider;
use omaromp2\laraprontoforms\ProntoForms;

class ProntoformsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Begin app
        // dd("LaraProntoforms Service Provider Booted");
    }

    public function register()
    {
        // hacemos un singleton para probar
        $this->app->singleton(ProntoForms::class, function () {
            return new ProntoForms();
        });
    }
}
