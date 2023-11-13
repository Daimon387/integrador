<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;

class BodegueroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $empleado = Empleado::where('usuario_id', $user->id)->first();
    
        if ($empleado && $empleado->cargo->nombre === 'Bodeguero') {
            return $next($request); // El usuario tiene el cargo de "administrador".
        }
    
        // Aquí puedes redirigir a otra ruta o mostrar un mensaje de error.
        return redirect('/')->with('error', 'No tienes permiso para acceder a esta ruta.');
    }
}
