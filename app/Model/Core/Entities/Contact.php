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

class Contact extends RootModel
{
    /**
     * @var string
     */
    protected $table = 'contacts';

    /**
     *  Whitelist of create array attributes
     * @var array
     */
    protected $fillable = ['primary_website', 'personalEmail', 'workEmail', 'facebookProfile', 'linkedinProfile', 'twitterProfile' ];

    /**
     * One to one inverse relationship to Person
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person(){
        return $this->belongsTo('App\Model\Core\Entities\Person', 'person_id');
    }

    /**
     * One to one relationship to \App\User
     *
     * @return \App\User
     */
    public function user(){
        return $this->hasOne('\App\User', 'contact_id', 'id');
    }

    /**
     * One to many inverse relationship to Organization
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relatedOrganization(){
        return $this->belongsTo('App\Model\Core\Entities\Organization', 'organization_id');
    }

    /**
     * PM many to many relationship to Note
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function notes(){
        return $this->morphMany('App\Model\Core\Entities\Note', 'noteable');
    }

    /**
     * @return $this
     */
    public function mailingAddress(){
        return $this->belongsTo('App\Model\Core\Entities\Address', 'mailing_address_id', 'id')->withDefault();
    }

    /**
     * @return $this
     */
    public function billingAddress(){
        return $this->belongsTo('App\Model\Core\Entities\Address', 'billing_address_id', 'id')->withDefault();
    }

    /**
     * @return $this
     */
    public function residenceAddress(){
        return $this->belongsTo('App\Model\Core\Entities\Address', 'residence_address_id', 'id')->withDefault();
    }

    /**
     * @return $this
     */
    public function workAddress(){
        return $this->belongsTo('App\Model\Core\Entities\Address', 'work_address_id', 'id')->withDefault();
    }

    /**
     * @return $this
     */
    public function cellPhone(){
        return $this->belongsTo('App\Model\Core\Entities\PhoneNumber', 'cell_phone_id', 'id')->withDefault();
    }

    /**
     * @return $this
     */
    public function homePhone(){
        return $this->belongsTo('App\Model\Core\Entities\PhoneNumber', 'home_phone_id', 'id')->withDefault();
    }

    /**
     * @return $this
     */
    public function workPhone(){
        return $this->belongsTo('App\Model\Core\Entities\PhoneNumber', 'work_phone_id', 'id')->withDefault();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function profileImages(){
        return $this->morphToMany('App\Model\Core\Entities\ImageGroup', 'image_groupable');
    }


}
