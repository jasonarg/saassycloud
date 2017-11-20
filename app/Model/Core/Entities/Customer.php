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
     * One to One Inverse relationship to App\User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user(){
        return $this->belongsTo('App\User');

    }


    /**
     * One to One Inverse relationship to App\Model\Core\Organization
     * for representing an organization that the customer is affiliated with
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function affiliatedOrganization(){
        return $this->belongsTo('App\Model\Core\Organization', 'affiliated_organization_id');

    }

    /**
     * One to One Inverse relationship to App\Model\Core\Organization
     * for representing an organization that the customer is related to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function relatedOrganization(){
        return $this->belongsTo('App\Model\Core\Organization', 'related_organization_id');

    }
}
