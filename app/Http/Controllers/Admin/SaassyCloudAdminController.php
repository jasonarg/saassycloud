<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/1/17
 * Time: 1:58 PM
 * License: Public Domain
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Product\Services\ProductDefinitionService;

class SaassyCloudAdminController extends Controller{

    protected $pds;

    public function __construct(){
        $this->pds = app()->make(ProductDefinitionService::class);
    }

    public function buildRecords(){
        /*
         *
         *

        truncate product_systems;
        truncate product_packages;
        truncate product_feature_groups;
        truncate product_features;
        truncate product_package_product_feature;
        truncate product_feature_group_product_feature;
         */
        $this->pds->createSystem('SaaSsy Cloud');
        $package1 = $this->pds->createPackage('SaaSsy', 7, 5);
        $package2 = $this->pds->createPackage('SaaSsier', 11, 9);
        $package3 = $this->pds->createPackage('SaaSsiest', 45, 35);

        $pfg1 = $this->pds->createFeatureGroup("Mushrooms");

            $pf1 = $this->pds->createFeature("Super Mushroom");
            $pf2 = $this->pds->createFeature("1up Mushroom");
            $pf3 = $this->pds->createFeature("Mini Mushroom");
            $pf4 = $this->pds->createFeature("Big Mushroom");
            $pf5 = $this->pds->createFeature("Mega Mushroom");




        $pfg2 = $this->pds->createFeatureGroup("Flowers");

            $pf6 = $this->pds->createFeature("Fire Flower");
            $pf7 = $this->pds->createFeature("Ice Flower");
            $pf8 = $this->pds->createFeature("Cloud Flower");

        $pfg3 = $this->pds->createFeatureGroup("Stars");

            $pf9 = $this->pds->createFeature("Super Star");
            $pf10 = $this->pds->createFeature("Rainbow Star");
            $pf11 = $this->pds->createFeature("Mega Star");


        $pfg4 = $this->pds->createFeatureGroup("Caps");

            $pf12 = $this->pds->createFeature("Mario Cap");
            $pf13 = $this->pds->createFeature("Luigi Cap");
            $pf14 = $this->pds->createFeature("Metal Cap");


        $pfg5 = $this->pds->createFeatureGroup("Outfits");
            $pf15 = $this->pds->createFeature("Frog Suit");
            $pf16 = $this->pds->createFeature("Penguin Suit");
            $pf17 = $this->pds->createFeature("Raccoon Suit");
            $pf18 = $this->pds->createFeature("Tanooki Suit");


        $pfg6 = $this->pds->createFeatureGroup("Tools");
            $pf19 = $this->pds->createFeature("Hammer");
            $pf20 = $this->pds->createFeature("Super Pickaxe");
            $pf21 = $this->pds->createFeature("Spin Drill");


        $pfg7 = $this->pds->createFeatureGroup("Allies");
            $pf22 = $this->pds->createFeature("Yoshi");
            $pf23 = $this->pds->createFeature("Yellow Yoshi");
            $pf24 = $this->pds->createFeature("Red Yoshi");
            $pf25 = $this->pds->createFeature("Toad");







    }
}