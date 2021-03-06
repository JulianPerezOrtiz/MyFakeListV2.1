<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Session;
use Config;
class LanguageSwitcher
{
    /** Set the language in the web page
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Session::has('locale'))
        {
            Session::put('locale',Config::get('app.locale'));
        }
        App::setLocale(session('locale'));
        return $next($request);
    }
}
