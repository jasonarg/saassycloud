<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/28/17
 * Time: 6:47 PM
 * License: Public Domain
 */

namespace App\Http\Controllers;


use App\Model\Product\Repositories\ProductSystemRepoInterface;
use App\Model\Tracking\Repositories\SessionRepoInterface;
use App\Services\Core\SignupService;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class SignupController extends Controller{

    public function __construct(){

    }

    public function compare(Request $request, ProductSystemRepoInterface $productSystemRepo){
        $system = $productSystemRepo->findByAttr("name", "SaaSsy Cloud", true);
        $abGroup = $request->session()->get('tracking.conversion.assignedAbViewGroupName') ? $request->session()->get('tracking.conversion.assignedAbViewGroupName') : '/ConversionA/';
        return view('signup.'.$abGroup.'.compare', $system->toArray());
    }

    public function start(Request $request){
        $abGroup = $request->session()->get('tracking.conversion.assignedAbViewGroupName') ? $request->session()->get('tracking.conversion.assignedAbViewGroupName') : '/ConversionA/';

        return view('signup.'.$abGroup.'.start');

    }

    public function setup(Request $request){
        $abGroup = $request->session()->get('tracking.conversion.assignedAbViewGroupName') ? $request->session()->get('tracking.conversion.assignedAbViewGroupName') : '/ConversionA/';

        return view('signup.'.$abGroup.'.setup');

    }

    public function warp(Request $request){
        $abGroup = $request->session()->get('tracking.conversion.assignedAbViewGroupName') ? $request->session()->get('tracking.conversion.assignedAbViewGroupName') : '/ConversionA/';

        return view('signup.'.$abGroup.'.warp');

    }

    public function create(Request $request, SessionRepoInterface $sessionRepo){
        $signupService = app()->make(SignupService::class);
        if($signupService->registerSessionCustomer()){

            $sessionTracker = $sessionRepo->findByAttr("session_token", $request->session()->getId(), true);
            $sessionTracker->loadMissing('conversionOpportunity');

            $emailAddress = $sessionTracker->conversionOpportunity->inputEmail;
            if(Auth::attempt(['email' => $emailAddress, 'password' => $request->session()->get('signupPs')])){
                $request->session()->forget('signupPs');

                return redirect('/members/onboarding');
            }
            else{
                echo 'No Auth with '.$emailAddress.': '.$request->session()->get('signupPs');
            }

        }


    }

}