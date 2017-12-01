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

class ProductPackage extends RootModel
{
    //
    protected $table = 'product_packages';

    /**
     *  Whitelist of create array attributes
     * @var array
     */
    protected $fillable = ['name', 'description', 'limits', 'ideal_for', 'benefit', 'date_introduced', 'monthly_price', 'annual_price'];

    /**
     * Many to Many relationship to ProductSystem
     *
     * @return Collection|\App\Model\Product\Entities\ProductSystem
     */
    public function productSystems(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductSystem', 'product_system_product_package');
    }

    /**
     * Many to Many Relationship between ProductPackage to Product Feature
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
   public function productFeatures(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductFeature', 'product_package_product_feature')
            ->withPivot('limit_quantity', 'limit_dimension_value', 'limit_dimension_type')->withTimestamps();
   }
}
