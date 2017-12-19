<?php

namespace App\Http\Resources\Tracking;

use Illuminate\Http\Resources\Json\Resource;

class SessionRequestResource extends Resource
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
            't'          => 'sessionRequests',
            'id'            => (string) $this->id,
            'a'    => [
                'sid' => $this->session->id,
                'rt' => $this->requestTime,
                'v' => $this->verb,
                'r' => $this->resourceName,
                'p' => $this->params,
            ],
            'rel' => [
                'srr' => new SessionRequestResponseResource($this->sessionRequestResponse)
            ]

        ];    }
}
