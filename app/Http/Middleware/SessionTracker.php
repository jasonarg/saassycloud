<?php

namespace App\Http\Middleware;

use App\Services\Tracking\SessionTrackingService;
use Closure;

class SessionTracker
{

    protected $storedRequestId;
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

        $this->appContainer = app();
        $sessionTracker = $this->appContainer->make(SessionTrackingService::class);
        $sessionTracker->logSessionRequest();
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
    }

}
