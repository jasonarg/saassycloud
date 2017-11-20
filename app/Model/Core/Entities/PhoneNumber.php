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

class PhoneNumber extends RootModel
{

    /**
     * @var string
     */
    protected $table = 'phone_numbers';

    /**
     * Whitelist of create array attributes
     *
     * @var array
     */
    protected $fillable = ['countryCode', 'areaCode', 'exchange', 'number', 'extension', 'textNumber', 'isTollFree'];

    /**
     * PM Many to Many relationship for Notes
     * @return Collection | \App\Model\Core\Entities\Note
     */
    public function notes(){
        return $this->morphMany('App\Model\Core\Entities\Note', 'noteable');
    }

    /**
     * PM Many to Many relationship for Contacts
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactCellPhone() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'cell_phone_id', 'id');
    }

    /**
     * PM Many to Many relationship for Contacts
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactHomePhone() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'home_phone_id', 'id');
    }

    /**
     * PM Many to Many relationship for Contacts
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contactWorkPhone() {
        return $this->hasMany('App\Model\Core\Entities\Contact', 'work_phone_id', 'id');
    }

}
