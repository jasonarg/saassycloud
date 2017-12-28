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
    protected $fillable = ['name', 'description', 'ideal_for', 'benefit', 'date_introduced', 'monthly_price', 'annual_price'];

    /**
     * One to Many inverse relationship to ProductSystem
     *
     * @return Collection|\App\Model\Product\Entities\ProductSystem
     */
    public function productSystem(){
        return $this->belongsTo('\App\Model\Product\Entities\ProductSystem', 'product_system_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   public function conversionOpportunities(){
       return $this->hasMany('\App\Model\Tracking\ConversionOpportunities');
   }

   public function __toArray(){
       $rtnArray = ["packageName" => $this->name,
           "description" => $this->description,
           "idealFor" => $this->idealFor,
           "benefit" => $this->benefit,
           "dateIntroduced" => $this->dateIntroduced,
           "monthlyPrice" => $this->monthlyPrice,
           "annualPrice" => $this->annualPrice,
           "featureGroups" => []
       ];
       $features = $this->productFeatures()->orderBy('product_feature_group_id', 'asc')->orderBy('name', 'asc')->get();
       $currentGroupId = -1;
       foreach($features as $feature){
           if($feature->product_feature_group_id != $currentGroupId){
               $currentGroupId = $feature->product_feature_group_id;
               $currentGroupName = $feature->featureGroup()->first()->name;
               $rtnArray["featureGroups"][$currentGroupName] = [];
           }
            $tempArray = [
                "limitQuantity" => $feature->pivot->limit_quantity,
                "limitDimensionType" => $feature->pivot->limit_dimension_type,
                "limitDimensionValue" => $feature->pivot->limit_dimension_value
            ];
            $rtnArray["featureGroups"][$currentGroupName][$feature->name] = $tempArray;
       }

       return $rtnArray;
   }
}
