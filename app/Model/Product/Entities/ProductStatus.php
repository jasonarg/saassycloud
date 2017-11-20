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

class ProductStatus extends RootModel
{
    //
    protected $table = 'product_statuses';

    protected $fillable = ['status'];

    /**
     * Many to Many relationship between ProductVersion
     *
     * @return Collection|\App\Model\Product\Entities\ProductVersion
     */
    public function status(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductVersion', 'product_version_product_status');
    }
}
