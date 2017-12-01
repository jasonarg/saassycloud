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
use App\Model\Core\Entities\Customer;
use App\Model\Core\Entities\Email;
use App\Model\Core\Entities\Organization;
use App\Model\Core\Entities\Person;
use App\Model\Core\Entities\Site;
use App\Model\Tracking\Repositories\SessionRepoInterface;
use App\User;
use Illuminate\Http\Request;

class SignupService{

    protected $sesionRepo;

    public function __construct(Request $request, SessionRepoInterface $sessionRepo){
        $this->request = $request;
        $this->sessionRepo = $sessionRepo;
    }

    public function registerSessionCustomer(){

        try {
            $sessionTracker = $this->sessionRepo->findByAttr("session_token", $this->request->session()->getId(), true);
            $sessionTracker->loadMissing('conversionOpportunity');

            $firstName = $sessionTracker->conversionOpportunity->inputGivenName,
            $lastName = $sessionTracker->conversionOpportunity->inputGivenName;
            $emailAddress = $sessionTracker->conversionOpportunity->inputEmail;
            $address = $sessionTracker->conversionOpportunity->inputAddress;
            $postalCode = $sessionTracker->conversionOpportunity->inputZip;
            $orgName = $sessionTracker->conversionOpportunity->inputOrganizationName;
            $siteName = $sessionTracker->conversionOpportunity->inputSiteName;
            $passwordHash = $sessionTracker->conversionOpportunity->inputPasswordHash;

            $this->registerCustomer($firstName, $lastName, $emailAddress, $address, $postalCode, $orgName, $siteName, $passwordHash);
        }
        catch (\Exception $e) {
            report($e);

            return false;
        }
        return true;
    }

    protected function registerCustomer($firstName, $lastName, $emailAddress, $address, $postalCode, $orgName, $siteName, $passwordHash){
        $person = new Person(["first_name" => $firstName,
            "last_name" => $lastName]);
        $person->save();
        $workEmail = new Email([
            "address" => $emailAddress
        ]);
        $workEmail->save();
        $address = new Address([
            "line1" => $address,
            "postalCode" => $postalCode
        ]);
        $address->save();
        $organization = new Organization([
            "name" => $orgName
        ]);
        $organization->save();
        $contact= new Contact();
        $contact->workAddress()->associate($address);
        $contact->workEmail()->associate($workEmail);
        $contact->relatedOrganization()->associate($organization);
        $contact->save();
        // create customer, user, site
        $customer = new Customer();
        $customer->organization()->associate($organization);
        $customer->save();
        $site = new Site([
            "name" => $siteName
        ]);
        $site->save();
        $customer->sites()->attach($site, ["status" => 1]);
        $user = new User();
        $user->email = $emailAddress;
        $user->password = $passwordHash;
        $user->contact()->associate($contact);
        $user->save();
    }

}