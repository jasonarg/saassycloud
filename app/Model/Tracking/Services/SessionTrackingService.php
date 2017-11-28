<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/26/17
 * Time: 6:37 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Services;

use App\Model\Tracking\Repositories\SessionRepoInterface;
use App\Model\Tracking\Repositories\SessionRequestRepoInterface;
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

/**
* Take request,
* look for session,
* if not there, create a new one
* add a sessionrequest entry
* store the sessionrequest id as a var in this singleton
* all this can be done in a SessionTracking Service
*
*/
    public function logSessionRequest(){
        dump($this->request);
        $sessions = $this->sessionRepo->findAll();
        //dd($sessions);


    }

    public function logSessionResponse(){

    }



}