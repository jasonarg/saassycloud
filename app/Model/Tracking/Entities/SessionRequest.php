<?php

namespace App\Model\Tracking\Entities;

use App\Model\RootModel;

class SessionRequest extends RootModel
{
    protected $table = 'session_request';

    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function session(){
        return $this->belongsTo('\App\Model\Tracking\Entities\Session');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function referrer(){
        return $this->hasOne('\App\Model\Tracking\Entities\Referral');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function response(){
        return $this->hasOne('\App\Model\Tracking\Entities\SessionRequestResponse');
    }
}
