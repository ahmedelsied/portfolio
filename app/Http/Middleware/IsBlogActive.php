<?php

namespace App\Http\Middleware;

use App\Domain\Core\Settings\SectionsSettings;
use Closure;
use Illuminate\Http\Request;

class IsBlogActive
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
        return app(SectionsSettings::class)->blog ? $next($request) : abort(403);
    }
}
