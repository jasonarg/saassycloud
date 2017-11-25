<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/25/17
 * Time: 1:58 PM
 * License: Public Domain
 */
namespace App\Model\Core\Repositories;

use App\Model\Core\Entities\Address;
use App\Model\RootRepoInterface;

interface AddressRepoInterface extends RootRepoInterface
{

    public function save(Address $entity);

    public function delete(Address $entity);
}