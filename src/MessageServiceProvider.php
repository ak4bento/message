<?php

namespace Akill\Message;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/message.php' => app()->basePath().'/config/message.php',
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton('Akill\Message\Message');
    }
}