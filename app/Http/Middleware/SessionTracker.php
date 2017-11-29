<?php

namespace App\Http\Middleware;

use App\Services\Tracking\SessionTrackingService;
use Closure;

class SessionTracker
{

    protected $sessionRequest;
    protected $appContainer;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sessionTracker = app()->make(SessionTrackingService::class);
        $this->sessionRequest = $sessionTracker->logSessionRequest();

        return $next($request);
    }

    public function terminate($request, $response)
    {
        /**
         * find the session id
         *
         * take the sessionresponse and do it
         *  pass to session service
         */

        $sessionTracker = app()->make(SessionTrackingService::class);
        $sessionTracker->logSessionResponse($this->sessionRequest);
    }

}
