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

class ProductSystem extends RootModel
{
    //
    protected $table = 'product_systems';

    protected $fillable = ['name', 'description'];

    /**
     * Many to Many relationship for ProductPackage
     * @return Collection|\App\Model\Product\Entities\ProductPackage
     */
    public function availableProductPackages(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductPackage', 'product_system_product_package');
    }
}
