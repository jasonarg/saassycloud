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

    /**
     * PM Many to Many Relationship
     *
     * @return Collection| \App\Model\Core\Entities\Contact
     */
    public function contactProfileImages()
    {
        return $this->morphedByMany('App\Model\Core\Entities\Contact', 'image_groupable');
    }
}
