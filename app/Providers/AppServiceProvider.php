<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $halaman='';
        if(Request::segment(1)=='siswa'){
            $halaman='siswa';
        }
        if(Request::segment(1)=='about'){
            $halaman='about';
        }
        view()->share('halaman', $halaman);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
