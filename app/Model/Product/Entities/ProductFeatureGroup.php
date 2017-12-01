<?php

namespace App\Model\Product\Entities;

use App\Model\RootModel;

class ProductFeatureGroup extends RootModel
{
    //
    protected $table = 'product_feature_groups';

    protected $fillable =['name', 'description'];



    public function features(){
        return $this->hasMany('\App\Model\Product\Entities\ProductFeature', 'product_feature_group_id', 'id');
    }
}
