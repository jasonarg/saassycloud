<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/27/17
 * Time: 7:39 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Repositories;


use App\Model\RootRepo;
use App\Model\Tracking\Entities\SessionRequestResponse;

class SessionRequestResponseRepo extends RootRepo implements SessionRequestResponseRepoInterface
{
    public function __construct(SessionRequestResponseRepoInterface $model){
        $this->model = $model;
    }

    public function save(SessionRequestResponse $model){

    }

    public function delete(SessionRequestResponse $model){

    }
}