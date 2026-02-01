<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Recupera el idioma de la sesion y si no hay ninguno devuelve como por defecto el de la configuracion
        $locale = session('locale', config('app.locale'));
        // Establecemos en memoria el idioma
        App::setLocale($locale);
        // Continuamos con la peticion habiendo establecido el idioma para el peticion
        return $next($request);
    }
}
