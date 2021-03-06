<?php
/**
 * SaaSy Cumulus Demo Project
 * User: jason
 * Date: 12/18/17
 * Time: 9:58 PM
 * License: Public Domain
 */

namespace App\Http\Controllers\Api\Tracking;


use App\Http\Controllers\Controller;
use App\Http\Resources\Tracking\SessionOverviewsResource;
use App\Model\Tracking\Entities\Session;
use Carbon\Carbon;

class DashboardDataController extends Controller{

    public function fromRange(string $from = null, string $through = null)
    {
        if(is_null($from)){
            $from = Carbon::now()->subDays(30);
        }
        else{
            $from = Carbon::createFromFormat('Y-m-d', $from);
        }
        if(is_null($through)){
            $through = clone $from;
            $through->addDays(30);
        }
        else{
            $through = Carbon::createFromFormat('Y-m-d', $through);
        }
        $whereArray = [];
        $whereArray[] = ['created_at', '>=', $from->toDateString()];
        $whereArray[] = ['created_at', '<=', $through->toDateString()." 23:59:59"];
        $return["sessions"] = new SessionOverviewsResource(Session::where($whereArray)->with(['requests', 'conversionOpportunity.assignedAbViewGroup', 'conversionOpportunity.chosenPackage', 'conversionOpportunity.sale'])->get());



        return $return;

    }
}