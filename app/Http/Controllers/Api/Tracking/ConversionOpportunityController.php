<?php

namespace App\Http\Controllers\Api\Tracking;

use App\Http\Resources\Tracking\ConversionOpportunitiesResource;
use App\Http\Resources\Tracking\ConversionOpportunityResource;
use App\Model\Tracking\Entities\ConversionOpportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConversionOpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryString = request()->query();
        if(isset($queryString["property"])){
            if(is_array($queryString["property"])){
                $whereArray = [];
                try{
                    for($i = 0; $i < count($queryString["property"]); $i++){
                        $whereArray[] = [$queryString["property"][$i], $queryString["operator"][$i], $queryString["value"][$i]];
                    }

                }catch(\Exception $e){
                    return response("Query not understood", 400);
                }
                return new ConversionOpportunitiesResource(ConversionOpportunity::where($whereArray)->get());
            }

        }

        return new ConversionOpportunitiesResource(ConversionOpportunity::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ConversionOpportunity $conversionOpportunity)
    {
        ConversionOpportunityResource::withoutWrapping();
        $conversionOpportunity->load(['session.requests', 'assignedAbViewGroup']);
        return new ConversionOpportunityResource($conversionOpportunity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
