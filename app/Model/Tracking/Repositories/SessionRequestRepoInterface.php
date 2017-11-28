<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/27/17
 * Time: 3:47 PM
 * License: Public Domain
 */

namespace App\Model\Tracking\Repositories;


use App\Model\RootRepoInterface;
use App\Model\Tracking\Entities\SessionRequest;

interface SessionRequestRepoInterface extends RootRepoInterface{

    public function save(SessionRequest $entity);

    public function delete(SessionRequest $entity);
}