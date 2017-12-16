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
use App\Model\Product\Entities\ProductSystem;
use App\Model\Product\Repositories\ProductSystemRepo;
use App\Model\Product\Services\ProductDefinitionService;

class AdminController extends Controller{

    protected $pds;

    public function __construct(){
        $this->pds = new ProductDefinitionService(new ProductSystemRepo(new ProductSystem()));
    }

    public function dashboard(){

        return view('admin.dashboard');
    }

    public function buildRecords(){
        die();
        return null;
        $system = $this->pds->createSystem('SaaSsy Cloud');
        $package1 = $this->pds->createPackage('SaaSsy', 7, 5);
        $package2 = $this->pds->createPackage('SaaSsier', 11, 9);
        $package3 = $this->pds->createPackage('SaaSsiest', 45, 35);

        $this->pds->addPackageToSystem($system, $package1);
        $this->pds->addPackageToSystem($system, $package2);
        $this->pds->addPackageToSystem($system, $package3);

        $pfg1 = $this->pds->createFeatureGroup("Mushrooms");

            $pf1 = $this->pds->createFeature("Super Mushroom");
            $pf2 = $this->pds->createFeature("1up Mushroom");
            $pf3 = $this->pds->createFeature("Mini Mushroom");
            $pf4 = $this->pds->createFeature("Big Mushroom");
            $pf5 = $this->pds->createFeature("Mega Mushroom");

        $this->pds->addFeatureToFeatureGroup($pfg1, $pf1);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf2);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf3);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf4);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf5);



        $pfg2 = $this->pds->createFeatureGroup("Flowers");

            $pf6 = $this->pds->createFeature("Fire Flower");
            $pf7 = $this->pds->createFeature("Ice Flower");
            $pf8 = $this->pds->createFeature("Cloud Flower");

        $this->pds->addFeatureToFeatureGroup($pfg2, $pf6);
        $this->pds->addFeatureToFeatureGroup($pfg2, $pf7);
        $this->pds->addFeatureToFeatureGroup($pfg2, $pf8);

        $pfg3 = $this->pds->createFeatureGroup("Stars");

            $pf9 = $this->pds->createFeature("Super Star");
            $pf10 = $this->pds->createFeature("Rainbow Star");
            $pf11 = $this->pds->createFeature("Mega Star");

        $this->pds->addFeatureToFeatureGroup($pfg3, $pf9);
        $this->pds->addFeatureToFeatureGroup($pfg3, $pf10);
        $this->pds->addFeatureToFeatureGroup($pfg3, $pf11);

        $pfg4 = $this->pds->createFeatureGroup("Caps");

            $pf12 = $this->pds->createFeature("Mario Cap");
            $pf13 = $this->pds->createFeature("Luigi Cap");
            $pf14 = $this->pds->createFeature("Metal Cap");

        $this->pds->addFeatureToFeatureGroup($pfg4, $pf12);
        $this->pds->addFeatureToFeatureGroup($pfg4, $pf13);
        $this->pds->addFeatureToFeatureGroup($pfg4, $pf14);


        $pfg5 = $this->pds->createFeatureGroup("Outfits");
            $pf15 = $this->pds->createFeature("Frog Suit");
            $pf16 = $this->pds->createFeature("Penguin Suit");
            $pf17 = $this->pds->createFeature("Raccoon Suit");
            $pf18 = $this->pds->createFeature("Tanooki Suit");

        $this->pds->addFeatureToFeatureGroup($pfg5, $pf15);
        $this->pds->addFeatureToFeatureGroup($pfg5, $pf16);
        $this->pds->addFeatureToFeatureGroup($pfg5, $pf17);
        $this->pds->addFeatureToFeatureGroup($pfg5, $pf18);


        $pfg6 = $this->pds->createFeatureGroup("Tools");
            $pf19 = $this->pds->createFeature("Hammer");
            $pf20 = $this->pds->createFeature("Super Pickaxe");
            $pf21 = $this->pds->createFeature("Spin Drill");

        $this->pds->addFeatureToFeatureGroup($pfg6, $pf19);
        $this->pds->addFeatureToFeatureGroup($pfg6, $pf20);
        $this->pds->addFeatureToFeatureGroup($pfg6, $pf21);


        $pfg7 = $this->pds->createFeatureGroup("Allies");
            $pf22 = $this->pds->createFeature("Yoshi");
            $pf23 = $this->pds->createFeature("Yellow Yoshi");
            $pf24 = $this->pds->createFeature("Red Yoshi");
            $pf25 = $this->pds->createFeature("Toad");
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf22);
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf23);
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf24);
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf25);

        /* SaaSsy */
        $this->pds->addFeatureToPackage($package1, $pf1, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf2, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf3, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf4, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf5, 250, 'time', 'month');

        $this->pds->addFeatureToPackage($package1, $pf6, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf7, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf8, 300, 'time', 'month');

        $this->pds->addFeatureToPackage($package1, $pf9, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf10, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf11, 200, 'time', 'month');


        $this->pds->addFeatureToPackage($package1, $pf12, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf13, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf14, 50, 'time', 'month');

        /* SaaSsier */
        $this->pds->addFeatureToPackage($package2, $pf1);
        $this->pds->addFeatureToPackage($package2, $pf2);
        $this->pds->addFeatureToPackage($package2, $pf3);
        $this->pds->addFeatureToPackage($package2, $pf4);
        $this->pds->addFeatureToPackage($package2, $pf5);
        $this->pds->addFeatureToPackage($package2, $pf6);
        $this->pds->addFeatureToPackage($package2, $pf7);
        $this->pds->addFeatureToPackage($package2, $pf8);
        $this->pds->addFeatureToPackage($package2, $pf9);
        $this->pds->addFeatureToPackage($package2, $pf10);
        $this->pds->addFeatureToPackage($package2, $pf11);
        $this->pds->addFeatureToPackage($package2, $pf12, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf13, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf14, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf15, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf16, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf17, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf18, 50, 'time', 'month');

        /* SaaSsiest */

        $this->pds->addFeatureToPackage($package3, $pf1);
        $this->pds->addFeatureToPackage($package3, $pf2);
        $this->pds->addFeatureToPackage($package3, $pf3);
        $this->pds->addFeatureToPackage($package3, $pf4);
        $this->pds->addFeatureToPackage($package3, $pf5);
        $this->pds->addFeatureToPackage($package3, $pf6);
        $this->pds->addFeatureToPackage($package3, $pf7);
        $this->pds->addFeatureToPackage($package3, $pf8);
        $this->pds->addFeatureToPackage($package3, $pf9);
        $this->pds->addFeatureToPackage($package3, $pf10);
        $this->pds->addFeatureToPackage($package3, $pf11);
        $this->pds->addFeatureToPackage($package3, $pf12);
        $this->pds->addFeatureToPackage($package3, $pf13);
        $this->pds->addFeatureToPackage($package3, $pf14);
        $this->pds->addFeatureToPackage($package3, $pf15);
        $this->pds->addFeatureToPackage($package3, $pf16);
        $this->pds->addFeatureToPackage($package3, $pf17);
        $this->pds->addFeatureToPackage($package3, $pf18);
        $this->pds->addFeatureToPackage($package3, $pf19);
        $this->pds->addFeatureToPackage($package3, $pf20);
        $this->pds->addFeatureToPackage($package3, $pf21);
        $this->pds->addFeatureToPackage($package3, $pf22);
        $this->pds->addFeatureToPackage($package3, $pf23);
        $this->pds->addFeatureToPackage($package3, $pf24);
        $this->pds->addFeatureToPackage($package3, $pf25);
    }
}