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

class Address extends RootModel
{
    /**
     * @var string
     */
    protected $table = 'addresses';

    /**
     * Whitelist of create array attributes
     *
     * @var array
     */
    protected $fillable = ['line1', 'line1', 'line3', 'locality', 'state', 'postalCode', 'isPoBox', 'country'];

    /**
     * PM many to many relationship to notes
     *
     * @return Collection | \App\Model\Core\Entities\Note
     */
    public function notes(){
        return $this->morphMany('App\Model\Core\Entities\Note', 'noteable');
    }

    /**
     * One to many relationship to Contact for a mailing address
     *
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactMailingAddress() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'mailing_address_id', 'id');
    }

    /**
     * One to many relationship to Contact for billing address
     *
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactBillingAddress() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'billing_address_id', 'id');
    }

    /**
     * One to many relationship to Contact for residence address
     *
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactResidenceAddress() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'residence_address_id', 'id');
    }

    /**
     * One to many relationship to Contact for work address
     *
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactWorkAddress() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'work_address_id', 'id');
    }
}
