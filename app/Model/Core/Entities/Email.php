<?php

namespace App\Model\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = 'emails';

    protected $fillable = ["address"];


    /**
     * One to one relationship to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
  /*  public function user(){
        return $this->hasOne('\App\User');
    }*/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactPersonalEmail(){
        return $this->hasOne('\App\Model\Core\Entities\Contact', 'personal_email_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactWorkEmail(){
        return $this->hasOne('\App\Model\Core\Entities\Contact', 'work_email_id', 'id');
    }
}
