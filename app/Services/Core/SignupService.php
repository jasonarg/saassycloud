<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/29/17
 * Time: 9:44 PM
 * License: Public Domain
 */

namespace App\Services\Core;


use App\Model\Tracking\Repositories\SessionRepoInterface;
use Illuminate\Http\Request;

class SignupService{

    protected $sesionRepo;

    public function __construct(Request $request, SessionRepoInterface $sessionRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
    }

    public function registerSessionCustomer(){

        $sessionTracker = $this->sessionRepo->findByAttr("session_token", $this->request->session()->getId(), true);
        $sessionTracker->loadMissing('conversionOpportunity');

        dump($sessionTracker);
        //create person

    }

    protected function registerCustomer(){

    }

}