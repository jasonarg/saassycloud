<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/1/17
 * Time: 1:58 PM
 * License: Public Domain
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Product\Entities\ProductSystem;
use App\Model\Product\Repositories\ProductSystemRepo;
use App\Model\Product\Services\ProductDefinitionService;
use App\Model\Tracking\Repositories\SessionRepo;

class AdminController extends Controller{

    protected $pds;

    public function __construct(){
        $this->pds = new ProductDefinitionService(new ProductSystemRepo(new ProductSystem()));
    }

    public function dashboard(){

        return view('admin.dashboardVue');
    }
    public function generateTraffic(){
        //sessions
        //session_requests oTOm
        //referrals oTOo
        //session_request_responses oTOo
        //conversion_opportunities oTOo session

        /*
         *
         *
         * Generate a random amount of traffic, 500 - 2500 sessions a day with a 20% bonus on sat/sun
         * they will come from a random group of referrers 60% paid (adwords/ad123, adwords/123, etc) 40% Unknown
         *
         * 25% land on the home page, the other 75% land on the signup/compare page including all ads
         *
         * 40% of home page landers bounce on the home page, 60% go onto compare page
         *
         * -conversionOpportunity created, assigned A/B Group
         * 60% bounce on signup/compare
         *
         * 35% choose saassy
         *
         * 55% choose saassier
         *
         * 10% choose saassiest
         *
         *   20% never complete start
         *
         *   10% go on to setup and never complete
         *
         *   80% remaining go to warp
         *
         *   95%  remaining finish warp and start trial
         *    70% of saassy trial users signup for a sale
         *          50/50 M or A
         *    60 % of saaSsier trial
         *          60A / 40M
         *     40% of  saassiest trial
         *          30A  / 70M
         *
         *
         * if they sign up,
         * they need to complete warp, fill out all fields in conversion opportunities
         *
         */

        $begin = new \DateTime( '2017-10-01' );
        $end = new \DateTime( '2017-10-31' );
        $end = $end->modify( '+1 day' );

        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($begin, $interval ,$end);
        $sessionRepo = new SessionRepo();
        foreach($daterange as $date){
            $numOfSessions = rand(850, 2100);

            if($date->format("N") > 5){
                $numOfSessions = $numOfSessions * rand(1.2, 1.4);
            }

            echo $date->format("Y-m-d")." ".$date->format("D")." ".$numOfSessions. "<br>";
            for($i = 0; $i < $numOfSessions; $i++){
                $dateTime = new \DateTime();
                $now = $dateTime->setTimestamp(rand($date->format('U'), $date->format('U') + 86400));
                echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$now->format('Y-m-d H:i:s')."<br>";
                print_r($this->createSession($now));
                $session = $sessionRepo->create($this->createSession($now));


/*                $session = $this->sessionRepo->getOrCreate($this->request->session()->getId());
                $now = Carbon::now()->toDateTimeString();
                $sr = new SessionRequest([ "request_time" => $now,
                    "verb" => request()->server("REQUEST_METHOD"),
                    "resource" => request()->server("REQUEST_URI"),
                    "params" => request()->server("QUERY_STRING")
                ]);

                $session->lastActionTime = $now;
                $session->requests()->save($sr);
                $sr->referrer()->save(new Referral(
                    ["referral_uri" => request()->server("HTTP_REFERER", request()->server("HTTP_REFERER") === null ? "UNKNOWN" : request()->server("HTTP_REFERER"))
                    ]));*/
            }
        }



    }

    protected function createSession($now){
        //$rand = substr(md5(microtime()),rand(0,26),25);
        return ["sessionToken" => substr(md5(microtime()),rand(0,26),25),
            "startTime" =>  $now->format('Y-m-d H:i:s'),
            "lastActionTime" =>  $now->format('Y-m-d H:i:s')
        ];

    }

    public function buildRecords(){
        die();
        return null;
        $system = $this->pds->createSystem('SaaSsy Cloud');
        $package1 = $this->pds->createPackage('SaaSsy', 7, 5);
        $package2 = $this->pds->createPackage('SaaSsier', 11, 9);
        $package3 = $this->pds->createPackage('SaaSsiest', 45, 35);

        $this->pds->addPackageToSystem($system, $package1);
        $this->pds->addPackageToSystem($system, $package2);
        $this->pds->addPackageToSystem($system, $package3);

        $pfg1 = $this->pds->createFeatureGroup("Mushrooms");

            $pf1 = $this->pds->createFeature("Super Mushroom");
            $pf2 = $this->pds->createFeature("1up Mushroom");
            $pf3 = $this->pds->createFeature("Mini Mushroom");
            $pf4 = $this->pds->createFeature("Big Mushroom");
            $pf5 = $this->pds->createFeature("Mega Mushroom");

        $this->pds->addFeatureToFeatureGroup($pfg1, $pf1);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf2);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf3);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf4);
        $this->pds->addFeatureToFeatureGroup($pfg1, $pf5);



        $pfg2 = $this->pds->createFeatureGroup("Flowers");

            $pf6 = $this->pds->createFeature("Fire Flower");
            $pf7 = $this->pds->createFeature("Ice Flower");
            $pf8 = $this->pds->createFeature("Cloud Flower");

        $this->pds->addFeatureToFeatureGroup($pfg2, $pf6);
        $this->pds->addFeatureToFeatureGroup($pfg2, $pf7);
        $this->pds->addFeatureToFeatureGroup($pfg2, $pf8);

        $pfg3 = $this->pds->createFeatureGroup("Stars");

            $pf9 = $this->pds->createFeature("Super Star");
            $pf10 = $this->pds->createFeature("Rainbow Star");
            $pf11 = $this->pds->createFeature("Mega Star");

        $this->pds->addFeatureToFeatureGroup($pfg3, $pf9);
        $this->pds->addFeatureToFeatureGroup($pfg3, $pf10);
        $this->pds->addFeatureToFeatureGroup($pfg3, $pf11);

        $pfg4 = $this->pds->createFeatureGroup("Caps");

            $pf12 = $this->pds->createFeature("Mario Cap");
            $pf13 = $this->pds->createFeature("Luigi Cap");
            $pf14 = $this->pds->createFeature("Metal Cap");

        $this->pds->addFeatureToFeatureGroup($pfg4, $pf12);
        $this->pds->addFeatureToFeatureGroup($pfg4, $pf13);
        $this->pds->addFeatureToFeatureGroup($pfg4, $pf14);


        $pfg5 = $this->pds->createFeatureGroup("Outfits");
            $pf15 = $this->pds->createFeature("Frog Suit");
            $pf16 = $this->pds->createFeature("Penguin Suit");
            $pf17 = $this->pds->createFeature("Raccoon Suit");
            $pf18 = $this->pds->createFeature("Tanooki Suit");

        $this->pds->addFeatureToFeatureGroup($pfg5, $pf15);
        $this->pds->addFeatureToFeatureGroup($pfg5, $pf16);
        $this->pds->addFeatureToFeatureGroup($pfg5, $pf17);
        $this->pds->addFeatureToFeatureGroup($pfg5, $pf18);


        $pfg6 = $this->pds->createFeatureGroup("Tools");
            $pf19 = $this->pds->createFeature("Hammer");
            $pf20 = $this->pds->createFeature("Super Pickaxe");
            $pf21 = $this->pds->createFeature("Spin Drill");

        $this->pds->addFeatureToFeatureGroup($pfg6, $pf19);
        $this->pds->addFeatureToFeatureGroup($pfg6, $pf20);
        $this->pds->addFeatureToFeatureGroup($pfg6, $pf21);


        $pfg7 = $this->pds->createFeatureGroup("Allies");
            $pf22 = $this->pds->createFeature("Yoshi");
            $pf23 = $this->pds->createFeature("Yellow Yoshi");
            $pf24 = $this->pds->createFeature("Red Yoshi");
            $pf25 = $this->pds->createFeature("Toad");
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf22);
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf23);
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf24);
        $this->pds->addFeatureToFeatureGroup($pfg7, $pf25);

        /* SaaSsy */
        $this->pds->addFeatureToPackage($package1, $pf1, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf2, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf3, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf4, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf5, 250, 'time', 'month');

        $this->pds->addFeatureToPackage($package1, $pf6, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf7, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf8, 300, 'time', 'month');

        $this->pds->addFeatureToPackage($package1, $pf9, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf10, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf11, 200, 'time', 'month');


        $this->pds->addFeatureToPackage($package1, $pf12, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf13, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package1, $pf14, 50, 'time', 'month');

        /* SaaSsier */
        $this->pds->addFeatureToPackage($package2, $pf1);
        $this->pds->addFeatureToPackage($package2, $pf2);
        $this->pds->addFeatureToPackage($package2, $pf3);
        $this->pds->addFeatureToPackage($package2, $pf4);
        $this->pds->addFeatureToPackage($package2, $pf5);
        $this->pds->addFeatureToPackage($package2, $pf6);
        $this->pds->addFeatureToPackage($package2, $pf7);
        $this->pds->addFeatureToPackage($package2, $pf8);
        $this->pds->addFeatureToPackage($package2, $pf9);
        $this->pds->addFeatureToPackage($package2, $pf10);
        $this->pds->addFeatureToPackage($package2, $pf11);
        $this->pds->addFeatureToPackage($package2, $pf12, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf13, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf14, 300, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf15, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf16, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf17, 50, 'time', 'month');
        $this->pds->addFeatureToPackage($package2, $pf18, 50, 'time', 'month');

        /* SaaSsiest */

        $this->pds->addFeatureToPackage($package3, $pf1);
        $this->pds->addFeatureToPackage($package3, $pf2);
        $this->pds->addFeatureToPackage($package3, $pf3);
        $this->pds->addFeatureToPackage($package3, $pf4);
        $this->pds->addFeatureToPackage($package3, $pf5);
        $this->pds->addFeatureToPackage($package3, $pf6);
        $this->pds->addFeatureToPackage($package3, $pf7);
        $this->pds->addFeatureToPackage($package3, $pf8);
        $this->pds->addFeatureToPackage($package3, $pf9);
        $this->pds->addFeatureToPackage($package3, $pf10);
        $this->pds->addFeatureToPackage($package3, $pf11);
        $this->pds->addFeatureToPackage($package3, $pf12);
        $this->pds->addFeatureToPackage($package3, $pf13);
        $this->pds->addFeatureToPackage($package3, $pf14);
        $this->pds->addFeatureToPackage($package3, $pf15);
        $this->pds->addFeatureToPackage($package3, $pf16);
        $this->pds->addFeatureToPackage($package3, $pf17);
        $this->pds->addFeatureToPackage($package3, $pf18);
        $this->pds->addFeatureToPackage($package3, $pf19);
        $this->pds->addFeatureToPackage($package3, $pf20);
        $this->pds->addFeatureToPackage($package3, $pf21);
        $this->pds->addFeatureToPackage($package3, $pf22);
        $this->pds->addFeatureToPackage($package3, $pf23);
        $this->pds->addFeatureToPackage($package3, $pf24);
        $this->pds->addFeatureToPackage($package3, $pf25);
    }
}