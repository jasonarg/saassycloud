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

class ProductFeature extends RootModel
{
    //
    protected $table = 'product_features';

    protected $fillable = ['name', 'description', 'benefit', 'group'];

    /**
     * One to one inverse relationship to product
     * @return \App\Model\Product\Entities\Product
     */
    public function product(){
        return $this->belongsTo('\App\Model\Product\Entities\Product');
    }

    /**
     * Many to Many relationship to ProductVersion
     * Pivot fields: change_type|new, improved, removed, unchanged
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productVersions(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductVersion', 'product_version_product_feature');
    }
}
