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
     * One to Many relationship for ProductPackage
     * @return Collection|\App\Model\Product\Entities\ProductPackage
     */
    public function availableProductPackages(){
        return $this->hasMany('\App\Model\Product\Entities\ProductPackage', 'product_system_id');
    }

    public function toArray(){
        $array = [
            "systemName" => $this->name,
            "packages" => []];
        $packages = $this->availableProductPackages()->orderBy('annual_price', 'asc')->get();
        foreach($packages as $package){
            $array["packages"][] = $package->__toArray();
        }
        $featureGroups = [];
        foreach($array["packages"] as $package){
            foreach($package["featureGroups"] as $featureGroupName => $features){
                $featureGroups[$featureGroupName] = [];
                foreach($features as $featureName => $feature){
                    $featureGroups[$featureGroupName][$featureName] = 1;
                }
            }
        }
        $array["combinedFeatureGroups"] = $featureGroups;

        return $array;
    }
}
