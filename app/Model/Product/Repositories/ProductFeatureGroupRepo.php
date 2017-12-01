<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/1/17
 * Time: 12:14 PM
 * License: Public Domain
 */

namespace App\Model\Product\Repositories;


use App\Model\Product\Entities\ProductFeatureGroup;
use App\Model\RootRepo;

class ProductFeatureGroupRepo extends RootRepo implements ProductFeatureGroupRepoInterface{

    protected $model;

    public function __construct(ProductFeatureGroup $model){
        $this->model = $model;
    }
}