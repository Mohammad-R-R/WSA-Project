<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Logo;
use App\Models\meta;
use App\Models\footer;
use Illuminate\Support\Facades\Cache;

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
        Cache::rememberForever('logo',function()
        {
           return Logo::first(); # code...
        });

        Cache::rememberForever('meta',function()
        {
           return meta::first(); # code...
        });

        Cache::rememberForever('footer',function()
        {
           return footer::first(); # code...
        });








        
        //
    }
}
