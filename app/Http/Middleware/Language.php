<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }

    public function handle($request, Closure $next)
    {
        $this->app->setLocale(session('my_locale',config('app.locals')));
        return $next($request);
    }
}
