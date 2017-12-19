<?php

namespace App\Http\Resources\Tracking;

use App\Model\Tracking\Entities\ConversionOpportunity;
use Illuminate\Http\Resources\Json\Resource;

class SessionOverviewResource extends Resource
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
            't' => 'session',
            'id' => (string) $this->id,
            'a' => [
                'at' => $this->startTime,
                'lat' => $this->lastActionTime,
                'ip' => $this->ip,
                'ua' => $this->userAgent,
                'ui' => $this->userID,
            ],
            'rel' => [
                'rc' => count($this->requests),
                'co' => new ConversionOpportunityResource($this->conversionOpportunity)
            ]

        ];
    }
}
