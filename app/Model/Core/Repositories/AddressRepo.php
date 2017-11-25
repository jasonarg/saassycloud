<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/25/17
 * Time: 2:01 PM
 * License: Public Domain
 */

namespace App\Model\Core\Repositories;

use App\Model\Core\Entities\Address;
use App\Model\RootRepo;


class AddressRepo extends RootRepo implements AddressRepoInterface
{

    protected $model;

    public function __construct(Address $model){
        $this->model = $model;
    }

    public function save(Address $entity){

    }

    public function delete(Address $entity){

    }

}