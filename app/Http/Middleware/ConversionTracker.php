<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/28/17
 * Time: 4:00 PM
 * License: Public Domain
 */

namespace App\Http\Middleware;

use App\Services\Tracking\ConversionTrackingService;
use Closure;

class ConversionTracker{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,  Closure $next)
    {
        $conversionTrackingService = app()->make(ConversionTrackingService::class);
        $conversionTrackingService->trackConversionOpportunity();

        return $next($request);

    }

}