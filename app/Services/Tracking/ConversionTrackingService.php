<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/28/17
 * Time: 4:19 PM
 * License: Public Domain
 */

namespace App\Services\Tracking;


use App\Model\Tracking\Entities\AbViewGroup;
use App\Model\Tracking\Entities\ConversionOpportunity;
use App\Model\Tracking\Repositories\AbViewGroupRepo;
use App\Model\Tracking\Repositories\SessionRepoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConversionTrackingService{

    protected $request;
    protected $sessionRepo;
    protected $sessionTracker;
    protected $trackedFields = [
        "input_site_name" => "worldName",
        "input_email" => "signupEmail",
        "input_password_hash" => "signupPassword",
        "input_organization_name" => "organizationName",
        "input_given_name" => "firstName",
        "input_last_name" => "lastName",
        "input_address" => "address1",
        "input_zip" => "zip"
    ];

    public function __construct(Request $request, SessionRepoInterface $sessionRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
        $this->sessionTracker = $this->sessionRepo->findByAttr("session_token", $this->request->session()->getId(), true);
        $this->sessionTracker->loadMissing('conversionOpportunity');
        if(is_null($this->sessionTracker->conversionOpportunity)){
            $this->createConversionOpportunity();
        }
    }

    public function trackConversionOpportunity(){
        if($this->request->method() == "POST"){
            $this->logInput();
        }
    }

    protected function logInput(){
        #TODO needs validation
        foreach($this->request->all() as $param => $value){
            if(in_array($param, $this->trackedFields)){
                if($param == "signupPassword"){
                    $iValue = Hash::make($value, ["rounds" => 12]);
                }
                else{
                    $iValue = $value;
                }
                $this->sessionTracker->conversionOpportunity()->update([
                    array_search($param, $this->trackedFields) => $iValue
                ]);
            }
        }
        $this->sessionTracker->conversionOpportunity()->update([
            "last_step_completed" => $this->getLastStepCompleted()
        ]);
        $this->sessionTracker->save();
    }

    protected function createConversionOpportunity(){
        /*
         * put in packagename
         * Get all active AbViewGroups, randomly assign one.
         * Log the landing page
         * Store assigned AbViewGroup in session for faster lookups in controllers
         */
        $abViewGroupRepo = new AbViewGroupRepo(new AbViewGroup());
        $abViewGroups = $abViewGroupRepo->findByConditions([
            ["for", "=", "conversion"],
            ["active", "=", 1],
        ]);
        $assignedAbGroup = $abViewGroups[rand(0, count($abViewGroups) - 1)];
        $co = new ConversionOpportunity();
        $co->landingPage = $this->request->server("REQUEST_URI");
        $co->assignedAbViewGroup()->associate($assignedAbGroup);

        $this->sessionTracker->conversionOpportunity()->save($co);
        if(!$this->request->session()->has('tracking')){
            $this->request->session()->put('tracking', []);
        }
        $this->request->session()->put('tracking.conversion', []);
        $this->request->session()->put('tracking.conversion.assignedAbViewGroupName', $assignedAbGroup->name);
    }

    protected function getLastStepCompleted(){

        $lastStepCompleted = "";
        if(array_key_exists("worldName", $this->request->all())){
            $lastStepCompleted = "start";
        }
        if(array_key_exists("signupPassword", $this->request->all())){
            $lastStepCompleted = "setup";
        }
        if(array_key_exists("signupZip", $this->request->all())){
            $lastStepCompleted = "warp";
        }

        return $lastStepCompleted;
    }





}