<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // Asegúrate de importar el facade Schema

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
        // Establecer la longitud predeterminada de las columnas de cadena para evitar el error de longitud de clave
        Schema::defaultStringLength(191);
    }
}
