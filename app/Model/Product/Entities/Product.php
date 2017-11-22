<?php
/**
 * SaaSy Cumulus Demo Application
 * User: jason
 * Date: 11/18/17
 * Time: 6:05 PM
 * License: Public Domain
 */
namespace App\Model\Product\Entities;

use App\Model\RootModel;

class Product extends RootModel
{
    //
    protected $table = 'products';

    protected $fillable = ['name', 'description'];

    /**
     * Many to many relationship to ProductPackage
     *
     * @return Collection|\App\Model\Product\Entities\ProductPackage
     */
    public function assignedProductsPackages(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductPackage', 'product_package_product');
    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function images(){
        return $this->morphToMany('App\Model\Core\Entities\ImageGroup', 'image_groupable');
    }

}
