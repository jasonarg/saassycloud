<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/1/17
 * Time: 12:13 PM
 * License: Public Domain
 */

namespace App\Model\Product\Repositories;


use App\Model\Product\Entities\ProductSystem;
use App\Model\RootRepo;

class ProductSystemRepo extends RootRepo implements ProductSystemRepoInterface{

    protected $model;

    public function __construct(ProductSystem $model){

        $this->model = $model;
    }
}