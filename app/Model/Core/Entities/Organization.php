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

class Organization extends RootModel
{

    protected $table = 'organizations';

    protected $fillable = ["name"];

    /**
     * One to many relationship to contact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts(){
        return $this->hasMany('\App\Model\Core\Entities\Contact');
    }

    /**
     * Self referencing One to Many inverse relationship for org hierarchy
     * @return \App\Model\Core\Entities\Organization
     */
    public function parent()
    {
        return $this->belongsTo('\App\Model\Core\Entities\Organization', 'parent_id');
    }

    /**
     * Self referencing One to Many relationship for org hierarchy
     * @return Collection|\App\Model\Core\Entities\Organization
     */
    public function children()
    {
        return $this->hasMany('\App\Model\Core\Entities\Organization', 'parent_id');
    }

    public function customer(){
        return $this->hasOne('\App\Model\Core\Entities\Customer', 'organization_id', 'id');
    }
}
