<?php

namespace App\Model\Tracking\Entities;

use App\Model\RootModel;

class SessionRequestResponse extends RootModel
{
    protected $table = 'session_request_responses';

    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sessionRequest(){
        return $this->belongsTo('\App\Model\Tracking\Entities\SessionRequest', 'session_request_id', 'id');
    }
}
