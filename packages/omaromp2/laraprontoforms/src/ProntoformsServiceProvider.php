<?php

namespace omaromp2\laraprontoforms;
use Illuminate\Support\ServiceProvider;

class ProntoformsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Begin app
        dd("LaraProntoforms Service Provider Booted");
    }

    public function register()
    {
        //
    }
}
