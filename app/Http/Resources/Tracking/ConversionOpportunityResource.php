<?php

namespace App\Http\Resources\Tracking;

use App\Http\Resources\Product\ProductPackageResource;
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
                'converted' => $this->converted,
                'conversionType' => $this->conversionType,
                'lastStepCompleted' => $this->lastStepCompleted,
                'inputSiteName' => $this->inputSiteName,
                'inputZip' => $this->inputZip,
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt
            ],
            'relationships' => [
                'abViewGroup' => new AbViewGroupResource($this->assignedAbViewGroup),
                'chosenPackage' => new ProductPackageResource($this->chosenPackage),
            ]

        ];
    }
}
