<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $userid = $user->id;
                $empleado = Empleado::where('usuario_id', $userid)->first();
                $e = $empleado->cargo->nombre;
                $view->with(['e' => $e]);
              
            }
        });
        
    }
}
