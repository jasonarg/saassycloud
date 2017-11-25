<?php

namespace App\Model\Tracking\Entities;

use App\Model\RootModel;

class AbView extends RootModel
{
    protected $table = 'ab_view';

    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function abViewGroups(){
        return $this->belongsToMany('\App\Model\Tracking\Entities\AbViewGroup', 'ab_view_group_ab_view', 'ab_view_id');
    }
}
