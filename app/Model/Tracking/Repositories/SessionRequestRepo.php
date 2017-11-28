<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/27/17
 * Time: 3:46 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Repositories;


use App\Model\RootRepo;
use App\Model\RootRepoInterface;
use App\Model\Tracking\Entities\SessionRequest;

class SessionRequestRepo extends RootRepo implements SessionRequestRepoInterface{

    public function __construct(SessionRequest $model){
        $this->model = $model;
    }

    public function save(SessionRequest $model){

    }

    public function delete(SessionRequest $model){

    }

}