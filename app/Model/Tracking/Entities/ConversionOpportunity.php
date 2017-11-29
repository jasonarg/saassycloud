<?php

namespace App\Model\Tracking\Entities;

use App\Model\RootModel;

class ConversionOpportunity extends RootModel
{
    protected $table = 'conversion_opportunities';

    protected $fillable = ["landing_page"];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function session(){
        return $this->belongsTo('\App\Model\Tracking\Entities\Session', 'session_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assignedAbViewGroup(){
        return $this->belongsTo('\App\Model\Tracking\Entities\AbViewGroup', 'assigned_ab_view_group_id', 'id');
    }
}
