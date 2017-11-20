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

class ProductVersion extends RootModel
{
    //
    protected $table = 'product_versions';

    protected $fillable = ['version_number', 'version_control_repo', 'version_control_branch', 'version_control_hash',
        'release_date', 'release_notes', 'superseded_date'];

    /**
     * One to One inverse relationship to Product
     *
     * @return \App\Model\Product\Entities\Product
     */
    public function product(){
        return $this->belongsTo('\App\Model\Product\Entities\Product');
    }

    /**
     * Many to Many relationship between ProductStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function status(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductStatus', 'product_version_product_status');
    }


    /**
     * Many to Many relationship to ProductFeature
     * Pivot fields: change_type|new, improved, removed, unchanged
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productVersions(){
        return $this->belongsToMany('\App\Model\Product\Entities\ProductFeature', 'product_version_product_feature');
    }
}
