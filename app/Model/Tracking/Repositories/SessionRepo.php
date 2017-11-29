<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/27/17
 * Time: 3:40 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Repositories;


use App\Model\RootRepo;
use App\Model\Tracking\Entities\Session;
use Illuminate\Support\Carbon;

class SessionRepo extends RootRepo implements SessionRepoInterface{


    public function __construct(Session $model){
        $this->model = $model;
    }

    /**
     * @param string $value sessiontoken
     *
     * @return Session
     */
    public function getOrCreate(string $value){
        $result = $this->model->where("session_token", $value)->get();
        if($result->count() === 0){
            return $this->create(self::convertRequestToSessionObjectArray());

        }
        else{
            return $result->first();
        }
    }



    public static function convertRequestToSessionObjectArray(){
        return ["sessionToken" => session()->getId(),
            "startTime" =>  Carbon::now()->toDateTimeString(),
            "lastActionTime" =>  Carbon::now()->toDateTimeString(),
            "ip" => request()->server("REMOTE_ADDR"),
            "userAgent" => request()->server("HTTP_USER_AGENT")
        ];
    }
}