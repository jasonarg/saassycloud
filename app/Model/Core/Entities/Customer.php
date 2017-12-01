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

class Customer extends RootModel
{
    //
    protected $table = 'customers';

    /**
     * Many to many relationship to App\User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adminUsers(){
        return $this->belongsToMany('App\User', 'customer_user');
    }

    public function sites(){
        return $this->belongsToMany('\App\Model\Core\Entities\Site', 'customer_site');
    }

    public function organization(){
        return $this->belongsTo('\App\Model\Core\Entities\Organization', 'organization_id', 'id');
    }

}
