<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/29/17
 * Time: 9:18 PM
 * License: Public Domain
 */

namespace App\Http\Controllers;


class MembersController extends Controller{

    public function __construct(){

    }

    public function index(){

    }

    public function onboarding(){
        return view('members.onboarding');

    }
}