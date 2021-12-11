<?php

namespace App\Providers;

use App\Mixins\MyStrMixins;
use App\TestClass;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Str::macro('currency', function ($value) {
//            return preg_replace('/\B(?=(\d{3})+(?!\d))/', ',', $value);
//        });

        Str::mixin(new MyStrMixins());

    }
}
