<?php

namespace App\Model\Tracking\Entities;

use App\Model\RootModel;

class AbViewGroup extends RootModel
{
    protected $table = 'ab_view_group';

    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function views(){
        return $this->belongsToMany('\App\Model\Tracking\Entities\AbView', 'ab_view_group_ab_view', 'ab_view_group_id');
    }

    public function assignedConversionOpportunities(){
        return $this->hasMany('\App\Model\Tracking\Entities\ConversionOpportunity', 'assigned_ab_view_group_id');
    }
}
