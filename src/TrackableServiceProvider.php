<?php

namespace S360Digital\Trackable;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TrackableServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::if('untrackable', function () {
            return untrackable();
        });

        Blade::if('trackable', function () {
            return trackable();
        });
    }
}
