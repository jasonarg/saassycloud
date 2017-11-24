<?php

namespace App\Model\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = 'emails';

    protected $fillable = [];


    /**
     * One to one relationship to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(){
        return $this->hasOne('\App\User');
    }
}
