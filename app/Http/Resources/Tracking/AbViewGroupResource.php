<?php

namespace App\Http\Resources\Tracking;

use Illuminate\Http\Resources\Json\Resource;

class AbViewGroupResource extends Resource
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
            'type'          => 'abViewGroups',
            'id'            => (string) $this->id,
            'attributes'    => [
                'name' => $this->name,
                'description' => $this->description,
                'for' => $this->for,
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt
            ]

        ];
    }
}
