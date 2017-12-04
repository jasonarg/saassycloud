<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/4/17
 * Time: 9:56 AM
 * License: Public Domain
 */

namespace App\Http\Controllers;


use App\Model\Product\Repositories\ProductFeatureGroupRepoInterface;

class IndexController extends Controller{

    protected $productSystemRepo;
    protected $productFeatureGroupRepo;

    /**
     * IndexController constructor.
     *
     * @param \App\Model\Product\Repositories\ProductSystemRepoInterface $productSystemRepo
     *
     * @return void
     */
    public function __construct(ProductFeatureGroupRepoInterface $productFeatureGroupRepo){
        $this->productFeatureGroupRepo = $productFeatureGroupRepo;

    }

    /**
     * Index method for passing data to the home view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $featuredFeatureGroups = [
            "allies" => $this->productFeatureGroupRepo->findByAttrWith("name", "Allies", "features", true)->features,
            "outfits" => $this->productFeatureGroupRepo->findByAttrWith("name", "Outfits", "features", true)->features
        ];

        return view('home', $featuredFeatureGroups);
    }

}