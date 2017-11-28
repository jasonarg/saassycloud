<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/25/17
 * Time: 1:58 PM
 * License: Public Domain
 */
namespace App\Model\Tracking\Repositories;

use App\Model\RootRepoInterface;
use App\Model\Tracking\Entities\Session;

interface SessionRepoInterface extends RootRepoInterface
{

    public function save(Session $entity);

    public function delete(Session $entity);
}