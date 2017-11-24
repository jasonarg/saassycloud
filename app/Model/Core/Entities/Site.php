<?php

namespace App\Model\Core\Entities;

use App\Model\RootModel;

class Site extends RootModel
{
    //

    protected $table = 'sites';

    protected $fillable = [];

    /**
     * Many to many relationship with Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers(){
        return $this->belongsToMany('\App\Model\Core\Entities\Customer', 'customer_site');
    }


}
