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

class Image extends RootModel
{
    protected $table = 'images';

    /**
     * Whitelist of create array attributes
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'caption', 'format', 'pixelWidth', 'pixelHeight', 'fileName', 'bytes'];

    /**
     * Many to Many relationship
     *
     *  return Collection|\App\Model\Core\Entities\ImageGroup
     */
    public function imageGroup()
    {
        return $this->belongsToMany('App\Model\Core\Entities\ImageGroup');
    }

    /**
     * PM Many to Many relationship
     *
     * @return Collection|\App\Model\Core\Entities\Note
     */
    public function notes()
    {
        return $this->morphToMany('App\Model\Core\Entities\Note', 'noteable');
    }
}
