<?php
/**
 * SaaSy Cumulus Demo Application
 * User: jason
 * Date: 11/18/17
 * Time: 6:05 PM
 * License: Public Domain
 */
namespace App\Model\Core\Entities;

use App\Model\RootModel;

class ImageGroup extends RootModel
{
    //
    protected $table = 'image_groups';

    /**
     * Many to Many relationship
     *
     * @return Collection| \App\Model\Core\Entities\Image
     */
    public function images()
    {
        return $this->belongsToMany('App\Model\Core\Entities\Image')->withPivot('active', 'cardinality', 'default');
    }

    public function defaultImage()
    {
        return $this->belongsToMany('App\Model\Core\Entities\Image')->wherePivot('default', 1);
    }

    /**
     * PM Many to Many Relationship to contact
     *
     * @return Collection| \App\Model\Core\Entities\Contact
     */
    public function contactProfileImages()
    {
        return $this->morphedByMany('App\Model\Core\Entities\Contact', 'image_groupable');
    }

    /**
     * PM Many to many relationship to Product
     *
     * @return Collection| \App\Model\Product\Entities\Product
     */
    public function productImages(){
        return $this->morphedByMany('\App\Model\Product|Entities\Product', 'image_groupable');
    }
}
