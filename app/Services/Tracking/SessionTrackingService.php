<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/26/17
 * Time: 6:37 PM
 * License: Public Domain
 */

namespace App\Services\Tracking;

use App\Model\Tracking\Entities\Session;
use App\Model\Tracking\Entities\SessionRequest;
use App\Model\Tracking\Entities\SessionRequestResponse;
use App\Model\Tracking\Repositories\SessionRepoInterface;
use App\Model\Tracking\Repositories\SessionRequestRepoInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SessionTrackingService{

    protected $request;
    protected $sessionRepo;
    protected $sessionRequestRepo;

    public function __construct(Request $request, SessionRepoInterface $sessionRepo, SessionRequestRepoInterface $sessionRequestRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
        $this->sessionRequestRepo = $sessionRequestRepo;
    }


    public function logSessionRequest(){
        $session = $this->sessionRepo->getOrCreate($this->request->session()->getId());
        $now = Carbon::now()->toDateTimeString();
        $sr = new SessionRequest([ "request_time" => $now,
            "verb" => request()->server("REQUEST_METHOD"),
            "resource" => request()->server("REQUEST_URI"),
            "params" => request()->server("QUERY_STRING")
        ]);
        $session->requests()->save($sr);
        $session->lastActionTime =$now;

        $session->save();

        return $sr;
    }

    public function logSessionResponse(SessionRequest $sr){
        $sr->response()->save(new SessionRequestResponse([
            "result" => "success"
            ])
        );


    }



}