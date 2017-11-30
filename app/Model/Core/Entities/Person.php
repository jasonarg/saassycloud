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

/**
 * Class Person
 *
 * defines the basic attributes of any person in the domain
 *
 * @package App\Model\Core\Entities
 */
class Person extends RootModel
{
    /**
     * @var string
     */
    protected $table = 'people';

    /**
     * Whitelist of create array attributes
     *
     * @var array
     */
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'prefix', 'suffix', 'salutation'];

    /**
     * One to one relationship to Contact.
     *
     * @return Collection | \App\Model\Core\Entities\Contact
     */
    public function contact(){
        return $this->hasOne('App\Model\Core\Entities\Contact');
    }
}
