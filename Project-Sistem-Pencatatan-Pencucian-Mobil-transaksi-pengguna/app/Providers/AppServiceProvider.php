<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Jika kamu ingin mencegah masalah terkait panjang index, bisa tetap menggunakan ini:
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
