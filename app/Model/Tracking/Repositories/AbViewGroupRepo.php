<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/28/17
 * Time: 4:32 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Repositories;


use App\Model\RootRepo;
use App\Model\RootRepoInterface;
use App\Model\Tracking\Entities\AbViewGroup;

class AbViewGroupRepo extends RootRepo implements RootRepoInterface{

    public function __construct(AbViewGroup $model){
        $this->model = $model;
    }
}