<?php

namespace App\Http\Resources\Tracking;

use Illuminate\Http\Resources\Json\Resource;

class ConversionOpportunityRelationshipResource extends Resource
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
            'session'   => [
                'links' => [
                    'self'    => route('conversionOpportunities.relationships.session', ['conversionOpportunity' => $this->id]),
                    'related' => route('conversionOpportunities.session', ['conversionOpportunity' => $this->id]),
                ],
                'data'  => new SessionIdentifierResource($this->session),
            ],
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('articles.index'),
            ],
        ];
    }
}
