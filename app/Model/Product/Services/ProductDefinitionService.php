<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/1/17
 * Time: 12:38 PM
 * License: Public Domain
 */

namespace App\Model\Product\Services;


use App\Model\Product\Entities\ProductFeature;
use App\Model\Product\Entities\ProductFeatureGroup;
use App\Model\Product\Entities\ProductPackage;
use App\Model\Product\Entities\ProductSystem;
use App\Model\Product\Repositories\ProductSystemRepoInterface;

class ProductDefinitionService{

    protected $productSystemRepo;
    protected $productSystem;

    public function __construct(ProductSystemRepoInterface $productSystemRepo){
        $this->productSystemRepo = $productSystemRepo;
    }

    /**
     * @param string $name
     * @param string $description
     *
     * @return ProductSystem
     */
    public function createSystem(string $name, string $description = ''){
        $this->productSystem = $this->productSystemRepo->create(['name' => $name, 'description' => $description]);

        return $this->productSystem;
    }

    /**
     * @param string $name
     * @param float $monthlyPrice
     * @param float $annualPrice
     * @param string $description
     * @param string $idealFor
     * @param string $benefit
     * @param string $dateIntroduced
     *
     * @return ProductPackage
     */
    public function createPackage(string $name,  float $monthlyPrice, float $annualPrice, string $description = '',
          string $idealFor = '', string $benefit = '', string $dateIntroduced = ''){
        $productPackage = new ProductPackage([
            'name' => $name, 'monthly_price' => $monthlyPrice, 'annual_price' => $annualPrice, 'description' => $description,
            'idealFor' => $idealFor, 'benefit' => $benefit, 'date_introduced' => $dateIntroduced
        ]);
        $productPackage->save();
    }

    /**
     * @param string $name
     * @param string $description
     *
     * @return ProductFeatureGroup
     */
    public function createFeatureGroup(string $name, string $description = ''){

    }

    /**
     * @param string $name
     * @param string $description
     * @param string $benefit
     *
     * @return ProductFeature
     */
    public function createFeature(string $name, string $description = '', string $benefit = ''){

    }

    /**
     * @param \App\Model\Product\Entities\ProductFeatureGroup $group
     * @param \App\Model\Product\Entities\ProductFeature $feature
     *
     * @return boolean
     */
    public function addFeatureToFeatureGroup(ProductFeatureGroup $group, ProductFeature $feature){

    }

    /**
     * @param \App\Model\Product\Entities\ProductPackage $package
     * @param \App\Model\Product\Entities\ProductFeature $feature
     * @param float $limitQuantity
     * @param string $limitDimensionType
     * @param string $limitDimensionValue
     *
     * @return boolean
     */
    public function addFeatureToPackage(ProductPackage $package, ProductFeature $feature, float $limitQuantity, string $limitDimensionType, string $limitDimensionValue){

    }

    /**
     * @param \App\Model\Product\Entities\ProductSystem $system
     * @param \App\Model\Product\Entities\ProductPackage $package
     *
     * return boolean
     */
    public function addPackagesToSystem(ProductSystem $system, ProductPackage $package){

    }
}