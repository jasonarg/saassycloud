<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/28/17
 * Time: 6:47 PM
 * License: Public Domain
 */

namespace App\Http\Controllers;


use \Illuminate\Http\Request;

class SignupController extends Controller{


    public function __construct(){

    }



    public function compare(Request $request){
        return view('signup.'.$request->session()->get('tracking.conversion.assignedAbViewGroupName').'.compare');
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

}