<?php

namespace App\Http\Resources\Tracking;

use Illuminate\Http\Resources\Json\Resource;

class ConversionOpportunityResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'          => 'conversionOpportunities',
            'id'            => (string) $this->id,
            'attributes'    => [
                'landingPage' => $this->landingPage,
            ],
        ];
    }
}
