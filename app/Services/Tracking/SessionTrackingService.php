<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/26/17
 * Time: 6:37 PM
 * License: Public Domain
 */

namespace App\Services\Tracking;

use App\Model\Tracking\Entities\Referral;
use App\Model\Tracking\Entities\Session;
use App\Model\Tracking\Entities\SessionRequest;
use App\Model\Tracking\Entities\SessionRequestResponse;
use App\Model\Tracking\Repositories\SessionRepoInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionTrackingService{

    protected $request;
    protected $sessionRepo;

    public function __construct(Request $request, SessionRepoInterface $sessionRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
    }

    public function logSessionRequest(){
        $session = $this->sessionRepo->getOrCreate($this->request->session()->getId());
        $now = Carbon::now()->toDateTimeString();
        $sr = new SessionRequest([ "request_time" => $now,
            "verb" => request()->server("REQUEST_METHOD"),
            "resource" => request()->server("REQUEST_URI"),
            "params" => request()->server("QUERY_STRING")
        ]);

        $session->lastActionTime = $now;
        $session->requests()->save($sr);
        $sr->referrer()->save(new Referral(
            ["referral_uri" => request()->server("HTTP_REFERER", request()->server("HTTP_REFERER") === null ? "UNKNOWN" : request()->server("HTTP_REFERER"))
        ]));


        return $sr;
    }

    /**
     * Stubbed out
     * #TODO Make useful by storing errors and bad html responses for html and data for json responses good or bad
     * @param \App\Model\Tracking\Entities\SessionRequest $sr
     */
    public function logSessionResponse(SessionRequest $sr){
        $sr->response()->save(new SessionRequestResponse([
            "result" => "success"
            ])
        );
    }



}