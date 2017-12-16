<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/16/17
 * Time: 10:45 AM
 * License: Public Domain
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class StreamController{

    /**
     * @return http response of profile image of logged in user
     */
    public function profilePic(){
        if(Auth::guest()){
            $path = base_path().'/public/i/defaultProfile.png';
        }
        else{
            $path = Auth::user()->getProfilePicPath();
        }
        return response()->file($path);
    }
}