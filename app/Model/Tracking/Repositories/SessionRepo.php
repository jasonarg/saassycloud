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

class SessionRepo extends RootRepo implements SessionRepoInterface{


    public function __construct(Session $model){
        $this->model = $model;
    }

    public function save(Session $entity){

    }

    public function delete(Session $entity){

    }
}