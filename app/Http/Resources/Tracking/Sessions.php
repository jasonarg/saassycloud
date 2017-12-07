<?php

namespace App\Http\Resources\Tracking;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Sessions extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
