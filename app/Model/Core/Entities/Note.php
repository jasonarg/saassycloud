<?php

namespace App\Model\Core\Entities;

use App\Model\RootModel;

class Note extends RootModel
{
    //
    protected $table = 'notes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function addresses()
    {
        return $this->morphedByMany('App\Model\Core\Entities\Address', 'noteable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function contacts()
    {
        return $this->morphedByMany('App\Model\Core\Entities\Contact', 'noteable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function images()
    {
        return $this->morphedByMany('App\Model\Core\Entities\Image', 'noteable');
    }
}
