<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class CookieConsentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cookieConsent = Cookie::get('cookieConsent');
        
      //if not working, try changing
      /*$cookieConsent = $request->cookie('cookieConsent');
      if (!$request->hasCookie('cookieConsent')) {
              View::share('showCookieConsent', true);
        }*/


          // Если кук согласия не установлен, передаем переменную в представление
          if (!$cookieConsent) {
           
            View::share('showCookieConsent', true);
        }
        return $next($request);
    }
}
