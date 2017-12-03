<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/28/17
 * Time: 6:47 PM
 * License: Public Domain
 */

namespace App\Http\Controllers;


use App\Model\Product\Entities\ProductSystem;
use App\Model\Product\Repositories\ProductSystemRepoInterface;
use App\Services\Core\SignupService;
use \Illuminate\Http\Request;

class SignupController extends Controller{
    public function __construct(){

    }

    public function compare(Request $request, ProductSystemRepoInterface $productSystemRepo){

        $system = $productSystemRepo->findByAttr("name", "SaaSsy Cloud", true);
        dump($system->toArray());
        return view('signup.'.$request->session()->get('tracking.conversion.assignedAbViewGroupName').'.compare', $system->toArray());
    }

    public function start(Request $request){

        return view('signup.'.$request->session()->get('tracking.conversion.assignedAbViewGroupName').'.start');

    }

    public function setup(Request $request){
        return view('signup.'.$request->session()->get('tracking.conversion.assignedAbViewGroupName').'.setup');

    }

    public function warp(Request $request){
        return view('signup.'.$request->session()->get('tracking.conversion.assignedAbViewGroupName').'.warp');

    }

    public function create(){
        /* read from conversionOpportunity from session
            register user
            create new site
            redirect to members onboarding
        */
        $signupService = app()->make(SignupService::class);
        $signupService->registerSessionCustomer();
        //Authenticate new customer
        //redirect to onboarding


    }

}