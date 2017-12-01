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
    public function featureGroups(){
        return $this->belongsTo('\App\Model\Product\Entities\ProductFeatureGroup', 'product_feature_group_id', 'id');
    }

    /**
     * Many to Many Relationship between ProductPackage to Product Feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
   public function packages(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductPackages', 'product_package_product_feature', 'product_feature_id')
            ->withPivot('limit_quantity', 'limit_dimension_value', 'limit_dimension_type')->withTimestamps();
   }
}
