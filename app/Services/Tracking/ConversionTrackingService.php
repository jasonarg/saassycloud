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

class ConversionTrackingService{

    protected $request;
    protected $sessionRepo;
    protected $sessionTracker;

    public function __construct(Request $request, SessionRepoInterface $sessionRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
        $this->sessionTracker = $this->sessionRepo->findByAttr("session_token",
            $this->request->session()->getId(), true);
    }

    public function trackConversionOpportunity(){
        /**
         * get session, session must be made, based on middleware ordering
         *
         * update entity with new request data
         *
         *            $table->unsignedBigInteger('session_id');
        $table->unsignedInteger('assigned_ab_view_group_id');
        $table->string('landing_page');
        $table->boolean('converted')->default(false);
        $table->string('conversion_type');
        $table->string('last_step_completed');
        $table->unsignedInteger('package_chosen_id')->nullable();
        $table->integer('site_name_lookup_attempts');
        $table->string('input_site_name');
        $table->string('input_email');
        $table->string('input_password_hash');
        $table->string('input_given_name');
        $table->string('input_last_name');
        $table->string('input_address');
        $table->string('input_zip');
         */
        $this->sessionTracker->loadMissing('conversionOpportunity');
        if(is_null($this->sessionTracker->conversionOpportunity)){
            $this->createConversionOpportunity();
        }
         $this->request->server("REQUEST_URI");

    }

    protected function createConversionOpportunity(){
        /*
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



}