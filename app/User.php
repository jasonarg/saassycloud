<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * One to One inverse relationship to contact
     * @return \App\Model\Core\Entities\Contact
     */
    public function contact(){
        return $this->belongsTo('\APp\Model\Core\Entities\Contact');
    }

    /**
     * Stub to check for existence of contact and create with existing contact or to create a new one
     */
    public function createWithContactCheck(){

    }
}


