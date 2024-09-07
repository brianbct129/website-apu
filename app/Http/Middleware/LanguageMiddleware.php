<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use App\Models\Language; 

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ambil bahasa yang aktif (default = 1)
        $activeLanguage = Language::where('default', 1)->first();

        if ($activeLanguage) {
            // Set locale aplikasi ke code bahasa yang aktif
            App::setLocale($activeLanguage->code);
        }

        return $next($request);
    }
}
