<?php

namespace App\Model\Tracking\Entities;

use App\Model\RootModel;

class Session extends RootModel
{
    protected $table = 'session';

    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests(){
        return $this->hasMany('\App\Model\Tracking\Entities\SessionRequest');
    }


}
