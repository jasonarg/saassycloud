<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 11/29/17
 * Time: 9:44 PM
 * License: Public Domain
 */

namespace App\Services\Core;


use App\Model\Core\Entities\Address;
use App\Model\Core\Entities\Contact;
use App\Model\Core\Entities\Email;
use App\Model\Core\Entities\Organization;
use App\Model\Core\Entities\Person;
use App\Model\Tracking\Repositories\SessionRepoInterface;
use Illuminate\Http\Request;

class SignupService{

    protected $sesionRepo;

    public function __construct(Request $request, SessionRepoInterface $sessionRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
    }

    public function registerSessionCustomer(){

        $sessionTracker = $this->sessionRepo->findByAttr("session_token", $this->request->session()->getId(), true);
        $sessionTracker->loadMissing('conversionOpportunity');

        $person = new Person(["first_name" => $sessionTracker->conversionOpportunity->inputGivenName,
            "last_name" => $sessionTracker->conversionOpportunity->inputGivenName]);
        $person->save();
        $workEmail = new Email([
            "address" => $sessionTracker->conversionOpportunity->inputEmail
        ]);
        $workEmail->save();
        $address = new Address([
            "line1" => $sessionTracker->conversionOpportunity->inputAddress,
            "postalCode" => $sessionTracker->conversionOpportunity->inputZip
        ]);
        $address->save();
        $organization = new Organization([
            "name" => $sessionTracker->conversionOpportunity->inputOrganizationName
        ]);
        $organization->save();

        $contact= new Contact();
        $contact->save();
        $contact->workAddress()->associate($address);
        $contact->workEmail()->associate($workEmail);
        $contact->relatedOrganization()->associate($organization);
        $contact->save();

    }

    protected function registerCustomer($firstName, $lastName, $emailAddress, $address, $postalCode, $orgName){

    }

}