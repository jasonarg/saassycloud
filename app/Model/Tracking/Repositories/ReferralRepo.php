<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/27/17
 * Time: 3:56 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Repositories;


use App\Model\RootRepo;
use App\Model\Tracking\Entities\Referral;

class ReferralRepo extends RootRepo implements ReferralRepoInterface{

    public function __construct(Referral $model){
        $this->model = $model;
    }

    public function save(Referral $model){

    }

    public function delete(Referral $model){

    }

}